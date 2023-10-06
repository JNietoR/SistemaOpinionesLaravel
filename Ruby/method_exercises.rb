

def max(*nums)
    #   la forma mas rapida seria el metodo max de la clase array
    #   nums.max
    #   el mayor elemento comenzara siempre siendo el primer elemento
    result = nums.first

    #iteramos con el metodo each y la variable resultado sera el nuevo numero a menos de que el num de la iteracion sea mayor al resultado
    nums.each do |num|    
        result = num if num > result
    end

    #no hace falta poner return si es la ultima linea de ejecucion del metodo
    result
end

def longest_string(*strs)
    #   forma rapida de resolverlo seria como el ejercicio anterior
    #   strs.max
    result = strs.first

    strs.each do |str|
        result = str if str.length > result.length
    end
    
    result
end

def word_count(str)
    #   primero convertiriamos el string a un array dividiendo los elementos usando el espacio, 
    #   luego contamos los elementos que tiene este array con el metodo .count de la clase array
    str.split(' ').count
end

def sum(*nums)
    #    la forma mas facil seria ejecutar el metodo sums de la clase array
    #   nums.sum
    # el resultado comenzara como 0 y le iremos sumando en cada iteracion los numeros que nos dan por parametro
    result = 0
    # esta seria la forma en una linea para el metodo
    nums.each {|num| restul += num}
    #   Esta seria la forma parecida al metodo anterior con strs
    #   nums.each do |num|
    #   result += num

    result
end

def mean(*nums)
    #   Reutilzamos el metodo de sum para sumar todos los numeros y .count para contar cuantos elementos tiene el array y calcular la lmedia
    sum(*nums) / nums.count
end

def find_even(*nums)
    #   Esta sería la forma mas rápida, con la función select de la clase array, seleccionaria el numero si es par true (num.even?) 
    #   nums.select { |num| num.even? }
    result = []
    nums.each do |num|
        result.push if num % 2 == 0
    end
    result
end

# Entorno de pruebas

# Metodo para comprobar los metodos, ejecuta todos los metodos y las ejecuta para comprobar que funcionan
def test(cases)
    puts cases.all? ? 'Perfect!' : 'Error'
end

#con las siguientes lineas capturariamos el metodo que queremos comprobar 
exercise = ARGV.first.to_sym
#ruby method_exercises.rb max

puts "Welcome to #{exercise}! Let's test it: "

#aqui comprobaria con un case cada funcion dandole unos parametros y el resultado que deberia de dar al ejecutar el metodo si funciona correctamente
case exercise
when :max
    test [max(3,4,2,1) == 4, max(100,-5,3,75) == 100]
when :longest_string
    test [longest_string('aaaaaaaa', 'aaa') == 'aaaaaaaa']
when :word_count
    test [word_count('bienvenido a ruby') == 3, word_count('ruby') == 1]
when :sum
    test [sum(1, 3, 5) == 9, sum(0,0, -2) == -2, sum(100, 30 ,1) == 131]
when :mean
    test [mean(5, 5) == 5, mean(10, 0) == 5, mean(2, 2, 2) == 2]
when :find_even
    test [find_even(1, 2, 3, 4) == [2, 4], find_even(1, 3, 5) == []]
end