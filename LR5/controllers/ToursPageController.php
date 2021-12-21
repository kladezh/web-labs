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

class ToursImportPageController extends ToursPageController
{
    public function process()
    {
        if ($this->isSubmited()) {
            $handler = new FileHandler();
            $result = $handler->readUrl($this->parameters['url']);

            if ($result === false) {
                $this->vh->error = 'Не удалось получить файл. Проверьте ссылку';
            } else if (!str_contains($result['type'], 'xml')) {
                $this->vh->error = 'Неверный формат файла';
            } else {
                $this->toursMapper->import($result['content'], new XmlFileCoder);

                $this->vh->rowsCount = $this->toursMapper->rowsCount();
            }
        }

        parent::renderPage('import.php');
    }
}

class ToursExportPageController extends ToursPageController
{
    public function process()
    {
        if($this->isSubmited()){
            // экспортим таблицу в формате XML
            $content = $this->toursMapper->export(new XmlFileCoder);
            $filename = 'tours_exported.xml';

            // передаем файл в поток на скачивание
            header('Content-Type: text/xml');
            header('Content-Disposition: attachment; filename='. $filename);
            echo $content;
        } else {
            parent::renderPage('export.php');
        }
    }
}