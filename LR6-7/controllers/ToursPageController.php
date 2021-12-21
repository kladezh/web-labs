<?php

class ToursPageController extends PageController
{
    protected $toursMapper;
    protected $countriesMapper;

    public function __construct()
    {
        $this->toursMapper = new ToursMapper;
        $this->countriesMapper = new CountriesMapper;

        parent::__construct();
    }

    public function process()
    {
        // получаем данные из таблиц
        $tours = $this->toursMapper->findAll();

        // устанавливаем переменные для страницы
        $this->vh->tours = $tours;
        $this->vh->countries = $this->countriesMapper->findAll();

        // загружаем страницу
        $this->renderPage('tours.php');
    }
}

class ToursReadPageController extends PageController
{
    public function process()
    {
        $tour = $this->toursMapper->find($this->parameters['id']);

        $this->vh->tour = $tour->properties();
        $this->renderPage('toursRead.php');
    }
}

trait ToursLoadPreviewTrait
{
    private function uploadPreview(array $preview_file) : string
    {
        $handler = new FileHandler();

        $preview_name = uniqid() . '.' . $handler->extension($preview_file['name']);
        $upload_dir = $this->getPreviewDir();

        $handler->move(
            $preview_file['tmp_name'],
            $upload_dir . $preview_name
        );

        return $preview_name;
    }

    private function unloadPreview(string $preview_name) 
    {
        $handler = new FileHandler();

        $handler->delete($this->getPreviewDir() . $preview_name);
    }

    private function getPreviewDir() : string
    {
        $config = Config::getInstance();
        $dir = $config->get('app')['root_url'] . 'models/resourses/img/tours/';

        return $dir;
    }
}

class ToursCreatePageController extends ToursPageController
{
    use ToursLoadPreviewTrait;

    public function process()
    {
        if ($this->isSubmited()) {
            // загружаем картинку
            $preview = $this->uploadPreview($this->parameters['files']['preview']);

            //создаем объект
            $this->toursMapper->insert(new TourObject(
                $this->parameters['name'],
                $preview,
                $this->parameters['country'],
                $this->parameters['description'],
                $this->parameters['cost']
            ));

            $this->vh->successMsg = 'Запись успешно добавлена!';
        }

        $this->vh->countries = $this->countriesMapper->findAll();
        $this->renderPage('toursCreate.php');
    }
}

class ToursDeletePageController extends PageController
{
    use ToursLoadPreviewTrait;

    public function process()
    {
        $preview_name = $this->toursMapper->find($this->parameters['id'])->properties()['preview'];
        $this->unloadPreview($preview_name);
        
        $this->toursMapper->delete($this->parameters['id']);

        $this->redirect('?controller=tours');
    }
}

class ToursUpdatePageController extends ToursPageController
{
    use ToursLoadPreviewTrait;

    public function process()
    {
        if($this->isSubmited()){
            // удаляем старую картинку и загружаем новую
            $old_preview = $this->toursMapper->find($this->parameters['id'])->properties()['preview'];
            $this->unloadPreview($old_preview);
            $new_preview = $this->uploadPreview($this->parameters['files']['preview']);

            $new_tour = new TourObject(
                $this->parameters['name'],
                $new_preview,
                $this->parameters['country'],
                $this->parameters['description'],
                $this->parameters['cost'],
                $this->parameters['id']
            );
            $this->toursMapper->update($new_tour);
            
            $tour = $new_tour;
            $this->vh->successMsg = 'Запись успешно обновлена!';
        } else {
            $tour = $this->toursMapper->find($this->parameters['id']);
        }

        $this->vh->tour = $tour;
        $this->vh->countries = $this->countriesMapper->findAll();
        $this->renderPage('toursUpdate.php');
    }
}