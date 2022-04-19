package Java;

/**
 * Main
 */
class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo!");
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
        car.passenger = 4;
        car.printDataCar();
        // System.out.println("Car License: " + car.license);

        Car car2 = new Car("EWQ345", new Account("Andrea Herrera", "AND234"));

        car2.passenger = 3;
        // System.out.println("Car License: " + car2.license);
        car2.printDataCar();
    }   
}