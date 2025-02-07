using System;

class Program
{
    static void Main()
    {
        string carMake = "Toyota";
        string carModel = "Camry";
        int carYear = 2021;
        double carPrice = 24000;

        Console.WriteLine("Car Make: " + carMake);
        Console.WriteLine("Car Model: " + carModel);
        Console.WriteLine("Car Year: " + carYear);
        Console.WriteLine("Car Price: " + carPrice);
    }
}
using System;

class Car
{
    // Fields (Data)
    private string make;
    private string model;
    private int year;
    private double price;

    // Constructor (Initialization)
    public Car(string make, string model, int year, double price)
    {
        this.make = make;
        this.model = model;
        this.year = year;
        this.price = price;
    }

    // Properties (Encapsulation of fields)
    public string Make
    {
        get { return make; }
        set { make = value; }
    }

    public string Model
    {
        get { return model; }
        set { model = value; }
    }

    public int Year
    {
        get { return year; }
        set { year = value; }
    }

    public double Price
    {
        get { return price; }
        set { price = value; }
    }

    // Method (Behavior)
    public void DisplayInfo()
    {
        Console.WriteLine($"Car Make: {make}");
        Console.WriteLine($"Car Model: {model}");
        Console.WriteLine($"Car Year: {year}");
        Console.WriteLine($"Car Price: ${price}");
    }
}

class Program
{
    static void Main()
    {
        // Create a Car object (instance of Car class)
        Car myCar = new Car("Toyota", "Camry", 2021, 24000);

        // Call the method to display car information
        myCar.DisplayInfo();
    }
}
