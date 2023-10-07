module OpenWebinars 
    class Dice 
        #       creamos getters y seters para los lados de nuestro dado
        attr_accessor :sides 
        #       creamos el contructor que solo tendra los lados
        def initialize(sides)
            #   comprobamos si el numero de lados es un valor adecuado si no lanzamos una excepcion con raise
            #   esta seria otra forma de comprobarlo con unless
            #   unless sides.is_a?(Numeric) && sides >= 2
            if !(sides.is_a?(Numeric)) || sides < 2  
                raise ArgumentError, 'wrong number of sides, minimum 2(coin)'
            end
            #   si el numnero que introdujimos fue correcto crearia el atributo sin problema
            @sides = sides
        end
        def roll
            #   genera un numero aleatorio entre 2 y sides o el numero de caras que le hemos introducido a la clase
            rand(2..sides)
        end
    end 
end