from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola Mundo!")
    car = Car("ASD321", Account('David Mercado', 'DAV432'))
    # car.license = "AMS234"
    # car.driver = "Andres Herrera"
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("REW123", Account('Milay', 'MLY765'))
    # car2.license = "QWE234"
    # car2.driver = "Andrea Herrera"
    print(vars(car2))
    print(vars(car2.driver))