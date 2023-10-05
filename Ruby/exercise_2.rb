puts 'Welcome to exercise 2!'
print 'Please enter a 4 digits number: '
#convierte el objeto string a integer
number = gets.to_i
#extraer millares del numero
thousands = number / 1000 
#extraer centenas del numero
hundreds = number % 1000 / 100 
#extraer decenas del numero
tens = number % 1000 % 100 / 10
#extraer unidades del numero
ones = number % 1000 % 100 % 10

puts "thousands: #{thousands}"
puts "hundreds: #{hundreds}"
puts "tens: #{tens}"
puts "ones: #{ones}"