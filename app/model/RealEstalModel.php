<?php
namespace Model;

class RealEstalModel
{
    private $idRealEstale;
    private $title;
    private $description;
    private $address;
    private $value;
    private $area;
    private $status;
    private $typeOwn;
    private $purpose;
    private $image;

    public function __construct(
        int $idRealEstale,
        string $title,
        string $description,
        string $address,
        int $value,
        int $area,
        bool $status,
        string $typeOwn,
        string $purpose,
        array $image
    ) {
        $this->idRealEstale = $idRealEstale;
        $this->title = $title;
        $this->description = $description;
        $this->address = $address;
        $this->value = $value;
        $this->area = $area;
        $this->status = $status;
        $this->typeOwn = $typeOwn;
        $this->purpose = $purpose;
        $this->image = $image;
    }

    public function setIdRealEstale(int $idRealEstale)
    {
        $this->idRealEstale = $idRealEstale;
    }

    public function getIdRealEstale(): int
    {
        return $this->idRealEstale;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setValue(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setArea(int $area)
    {
        $this->area = $area;
    }

    public function getArea(): int
    {
        return $this->area;
    }

    public function setStatus(bool $status)
    {
        $this->status = $status;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function setTypeOwn(string $typeOwn)
    {
        $this->typeOwn = $typeOwn;
    }

    public function getTypeOwn(): string
    {
        return $this->typeOwn;
    }

    public function setPurpose(string $purpose)
    {
        $this->purpose = $purpose;
    }

    public function getPurpose(): string
    {
        return $this->purpose;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
}
