<?php
namespace Model;

class UserModel
{
    private $idUser;
    private $firstName;
    private $lastName;
    private $phone;
    private $password;
    private $avatar;
    private $gender;
    private $birthday;
    private $address;
    private $email;
    private $createAt;
    private $status;

    public function __construct(
        int $idUser,
        string $firstName,
        string $lastName,
        string $phone,
        string $password,
        string $avatar,
        string $gender,
        string $birthday,
        string $address,
        string $email,
        string $createAt,
        bool $status
    ) {
        $this->idUser = $idUser;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->email = $email;
        $this->createAt = $createAt;
        $this->status = $status;
    }

    public function getIdUser(): string
    {
        return $this->idUser;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setAvatar(string $avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setBirthday(string $birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setCreateAt(string $createAt)
    {
        $this->createAt = $createAt;
        return $this;
    }

    public function getCreateAt(): string
    {
        return $this->createAt;
    }

    public function setStatus(bool $status)
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }
}
