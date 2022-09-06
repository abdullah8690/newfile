<?php
class Item
    {
        private ?string $description;
        private string $name , $image;
        private int $price, $weight, $quantity, $available, $discount;

        function __construct(array $item){
            $this->name=$item['name'];
            $this->description=$item['description'];
            $this->image=$item['image'];
            $this->price=$item['price'];
            $this->weight=$item['weight'];
            $this->quantity=$item['quantity'];
            $this->available=$item['available'];
            $this->discount=$item['discount'];
        }

    /**
     * @return mixed|string|null
     */
    public function getDescription(): mixed
    {
        return $this->description;
    }

    /**
     * @param mixed|string|null $description
     */
    public function setDescription(mixed $description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed|string
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getImage(): mixed
    {
        return $this->image;
    }

    /**
     * @param mixed|string $image
     */
    public function setImage(mixed $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int|mixed
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice(mixed $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int|mixed
     */
    public function getWeight(): mixed
    {
        return $this->weight;
    }

    /**
     * @param int|mixed $weight
     */
    public function setWeight(mixed $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int|mixed
     */
    public function getQuantity(): mixed
    {
        return $this->quantity;
    }

    /**
     * @param int|mixed $quantity
     */
    public function setQuantity(mixed $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int|mixed
     */
    public function getAvailable(): mixed
    {
        return $this->available;
    }

    /**
     * @param int|mixed $available
     */
    public function setAvailable(mixed $available): void
    {
        $this->available = $available;
    }

    /**
     * @return int|mixed
     */
    public function getDiscount(): mixed
    {
        return $this->discount;
    }

    /**
     * @param int|mixed $discount
     */
    public function setDiscount(mixed $discount): void
    {
        $this->discount = $discount;
    }



    }
