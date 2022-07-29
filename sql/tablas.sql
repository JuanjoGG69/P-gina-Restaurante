Create table comida(
    id INT PRIMARY KEY AUTO_INCREMENT,
    precio FLOAT NOT NULL,
    nombre VARCHAR(20) NOT NULL,
    tipo VARCHAR(30) CHECK (tipo IN ('entrante','carne','pescado','veganos', 'vegetarianos', 'postres', 'bebidas'))
);