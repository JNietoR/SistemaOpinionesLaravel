class Animal

end

class Fish < Animal
    inlcude Swimmable
end

class Monkey < Animal 
    include Walkable
    include Swimmable

module Swimmable
    def swim
        puts 'I can swin!'
    end
end

module Walkable
    def walk
        puts 'I can walk!'
    end
end
