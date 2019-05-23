<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 6:38 PM
 */

namespace App\Http\ViewModels;


use App\Common\DomainModels\Charts;

class ChartsVM
{
    public $id;
    public $date;
    public $value;
    public $created_at;
    public $updated_at;

    public function __construct(Charts $charts)
    {
        $this->id = $charts->getId();
        $this->date = $charts->getDate();
        $this->value = $charts->getValue();
        $this->created_at = $charts->getCreatedAt();
        $this->updated_at = $charts->getUpdatedAt();
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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
