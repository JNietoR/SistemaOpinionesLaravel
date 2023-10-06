puts 'numero de veces: '
num = gets.to_i

#mostrara iteracion hasta que el valor de num sea mayor que 0
while num > 0
    puts 'Iteration'
    num-=1
end
#con el metodo times tambien podemos hacerlo en una linea
num.times {puts 'iteracion'}
