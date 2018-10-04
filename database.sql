/*drop database pokemonCrescenzoIgnacio;*/
create database pokemonCrescenzoIgnacio;
use pokemonCrescenzoIgnacio;
create table pokemon(
 id int,
 nombre varchar(50),
 poder varchar(50),
 tipo varchar(200),
 link varchar(200),
 primary key (id)
);
insert into pokemon values(1,"Pikachu","Trueno","https://images.vexels.com/media/users/3/143426/isolated/lists/b9b84ffc510491704ecd0c5838a56271-rayo-perno-amarillo-s-mbolo.png","https://cdn.iconverticons.com/files/png/fa2966e51dfb847f_256x256.png"),
(2,"Charmander","Llamarada","https://llllline.com/image/cache/catalog/products/fire-png-500x500.jpg","https://pbs.twimg.com/profile_images/652908696721297410/xpBsSCDu_400x400.jpg"),
(3,"Bulbasaur","Espesura","http://elholandespicante.com/wp-content/uploads/2015/08/icono-planta-jardin.png","https://vignette.wikia.nocookie.net/es.pokemon/images/4/43/Bulbasaur.png/revision/latest/scale-to-width-down/350?cb=20170120032346"),
(4,"Ho-oh","Presion","https://llllline.com/image/cache/catalog/products/fire-png-500x500.jpg","https://assets.pokemon.com/assets/cms2/img/pokedex/full/250.png");