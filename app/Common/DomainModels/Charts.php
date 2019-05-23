<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 6:36 PM
 */

namespace App\Common\DomainModels;


class Charts
{
    private $id;
    private $date;
    private $value;
    private $created_at;
    private $updated_at;

    public function __construct($params)
    {
        $this->id = isset($params["id"]) ? $params["id"] : "";
        $this->date = isset($params["date"]) ? $params["date"] : "";
        $this->value = isset($params["value"]) ? $params["value"] : "";
        $this->created_at = isset($params["created_at"]) ? $params["created_at"] : "";
        $this->updated_at = isset($params["updated_at"]) ? $params["updated_at"] : "";
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}
