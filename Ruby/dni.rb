#CREAMOS LA CONSTANTE, CON EL %W EVITAMOS TENER QUE INSCRIVIR LAS COMILLAS DEL CARACTER Y LA , DE SEPARACION
LETRASDNI = %w(T R W A G M Y F P D X B N J Z S Q V H L C K E).freeze

print 'Introduzca su número de DNI sin letra: '
#Capturamos ese numero y lo transformamos a integer
num = gets.to_i
#conseguimos el indice para buscar la letra en el array de letras con la formula del dni
indice_letra = num % 23
letra = LETRASDNI[indice_letra]
#concatenamos lo que necesitamos para crear nuestro resultado
puts "DNI = #{num}#{letra}"