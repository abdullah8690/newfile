<?php
class Client
{
    private int $id;
    private string $first_name;
    private string $last_name;
    private ?string $address;
    private ?int $postal_code;
    private ?string $city;

    public function __construct(array $customer)
    {
        $this->id = $customer['id'];
        $this->first_name = $customer['first_name'];
        $this->last_name = $customer['last_name'];
        $this->address = $customer['address'];
        $this->postal_code = $customer['postal_code'];
        $this->city = $customer['city'];
    }

    /**
     * @return int|mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @param int|mixed $id
     */
    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed|string
     */
    public function getFirstName(): mixed
    {
        return $this->first_name;
    }

    /**
     * @param mixed|string $first_name
     */
    public function setFirstName(mixed $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed|string
     */
    public function getLastName(): mixed
    {
        return $this->last_name;
    }

    /**
     * @param mixed|string $last_name
     */
    public function setLastName(mixed $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed|string|null
     */
    public function getAddress(): mixed
    {
        return $this->address;
    }

    /**
     * @param mixed|string|null $address
     */
    public function setAddress(mixed $address): void
    {
        $this->address = $address;
    }

    /**
     * @return int|mixed|null
     */
    public function getPostalCode(): mixed
    {
        return $this->postal_code;
    }

    /**
     * @param int|mixed|null $postal_code
     */
    public function setPostalCode(mixed $postal_code): void
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return mixed|string|null
     */
    public function getCity(): mixed
    {
        return $this->city;
    }

    /**
     * @param mixed|string|null $city
     */
    public function setCity(mixed $city): void
    {
        $this->city = $city;
    }
}