<?php

class BaihatController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new BaihatModel();
        $this->view = new BaiHatView();
    }

    public function listSongs() {
        $songList = $this->model->getAllSongs();
        $this->view->renderSongs($songList);
    }

    public function showSong($songId) {
        $songData = $this->model->getSong($songId);

        if ($songData) {
            $this->view->renderSong($songData);
        } else {
            $this->view->renderError("Không tìm thấy bài hát");
        }
    }

    public function addSong($songData) {
        $this->model->addSong($songData);
        
        // Redirect hoặc hiển thị thông báo thành công
    }

    public function updateSong($songId, $songData) {
        $this->model->updateSong($songId, $songData);
        
        // Redirect hoặc hiển thị thông báo thành công
    }

    public function deleteSong($songId) {
        $this->model->deleteSong($songId);
        
        // Redirect hoặc hiển thị thông báo thành công
    }
}