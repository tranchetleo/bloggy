<?php

class ArticleEntity {
    private $id;
    private $user_id;
    private $name;
    private $content;
    private $views;
    private $date;

    public function __construct($id, $user_id, $name, $content, $views, $date) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->name = $name;
        $this->content = $content;
        $this->views = $views;
        $this->date = $date;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getName() {
        return $this->name;
    }

    public function getContent() {
        return $this->content;
    }

    public function getViews() {
        return $this->views;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'content' => $this->content,
            'views' => $this->views,
            'date' => $this->date
        ];
    }

    public static function fromArray($array) {
        return new ArticleEntity(
            $array['id'],
            $array['user_id'],
            $array['name'],
            $array['content'],
            $array['views'],
            $array['date']
        );
    }

    public function __toString() {
        return $this->name;
    }

}

?>