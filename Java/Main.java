package Java;

/**
 * Main
 */
class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo!");
        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Sonic");
        uberX.setPassenger(2);
        uberX.printDataCar();
        // System.out.println("Car License: " + car.license);

        UberVan uberVan = new UberVan("FDS654", new Account("David Mercado Juanes", "FDS432"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        /* Car car2 = new Car("EWQ345", new Account("Andrea Herrera", "AND234"));

        car2.passenger = 3;
        car2.printDataCar(); */
        // System.out.println("Car License: " + car2.license);


    }   
}