#defininimos array constante de los paises
PAISES = ['spain','france','germany']

#mostramos las instruciones
puts 'Bienvenido al ejercicio 3'
puts 'Introduce un numero de país: '
puts '1 - spain'
puts '2 - france'
puts '3 - germany'
#obtenemos por teclado el numero del pais que queremos invertir
country =gets.to_i
#imprime el pais con el numero-1 ya que como siempre el array comienza por la posicion 0 y lo invierte con .reverse
puts PAISES[country-1].reverse