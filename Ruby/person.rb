#Creamos el modulo OpenWebinars y encapsulamos la clase persona en este modulo
module OpenWebinars
    class Person
      #     De esa forma ponemos todos los atributos de una clase en una linea también se puede poner cada atributo en una línea separada
      attr_accessor :name, :surname, :age
      #     si queremos hacer un atributo con solo getter pero no setter utilizamos 
      #     attr_reader :age
  
      #     Constructor de la clase 
      #     De esta forma no tendremos que recordar el orden de los atributos, si eliminamos los : en cada atributo tendremos que introducirlos en el orden que nos indica
      def initialize(name:, surname:, age:)
        @name = name
        @surname = surname
        @age = age
      end
  
      def full_name
        #   Concatenación para unir los dos strings 
        "#{name} #{surname}"
      end
  
      def initials
        #   Con first sacaremos el primer caracter del string para sacar sus iniciales
        "#{name.first} #{surname.first}"
      end
    end
  end
  
  #     Así accederíamos a la clase persona dentro del módulo OpenWebinars
  OpenWebinars::Person
  #     con el siguiente comando creariamos la instancia de nuestra clase persona
  #     person = OpenWebinars::Person.new(name:'Jorge', surname: 'Nieto', age: 30)
  #     obtendriamos este resultado el interprete de ruby
  #     => #<OpenWebinars::Person:0x000001d9421589a8 @age=30, @name="Jorge", @surname="Nieto">
  #     ahora con person.age person.surname person.name accederemos a sus atributos
  #     para modificarlos seria facil person.surname = 'NewSurname"
