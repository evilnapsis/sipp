create table status (
	id int not null auto_increment primary key,
	name varchar(100) not null
);

insert into status (name) value ("Activo");
insert into status (name) value ("Bloquado");
create table usertype (
	id int not null auto_increment primary key,
	name varchar(100) not null
);

insert into usertype (name) value ("Alumno");
insert into usertype (name) value ("Profesor");
insert into usertype (name) value ("Admin");

create table user (
	id int not null auto_increment primary key,
	nick varchar(100),
	name varchar(100) not null,
	lastname varchar(100) not null,
	plate varchar(100) not null,
	mail varchar(100) ,
	image varchar(200),
	password varchar(50) not null,
	status_id int not null default 1,
	usertype_id int not null default 1,
	created_at datetime not null,
	foreign key (usertype_id) references usertype(id),
	foreign key (status_id) references status(id)
);
insert into user(name,lastname,plate,password,created_at) value ("Agustin","Ramos Escalante","TE100210","96f960d318379175afcc47a9ed670bc7958e4f2e",NOW());
insert into user(name,lastname,plate,password,usertype_id,created_at) value ("Agustin","Ramos Escalante","SS100210","96f960d318379175afcc47a9ed670bc7958e4f2e",2,NOW());
insert into user(name,lastname,plate,password,usertype_id,created_at) value ("SIPP","Administrator","SIPPADMIM","96f960d318379175afcc47a9ed670bc7958e4f2e",3,NOW());

create table grade(
	id int not null auto_increment primary key,
	name int not null
);

create table course(
	id int not null auto_increment primary key,
	name varchar(200),
	serie varchar(200)
);

insert into course (name) value ("Ingenieria en Sistemas Computacionales");
insert into course (name) value ("Ingenieria en Electronica");
insert into course (name) value ("Ingenieria en Mecatronica");


create table team(
	id int not null auto_increment primary key,
	name varchar(5) not null,
	grade_id int not null,
	foreign key (grade_id) references grade(id)
);

create table teacher_team(
	teacher_id int not null,
	team_id int not null,
	foreign key (team_id) references team(id),
	foreign key (teacher_id) references user(id)
);


create table user_team(
	user_id int not null,
	team_id int not null,
	foreign key (team_id) references team(id),
	foreign key (user_id) references user(id)
);


create table color(
	id int not null auto_increment primary key,
	name varchar(50) not null
);

create table e_color_interpretation(
	id int not null auto_increment primary key,
	color_id int not null,
	one_two varchar(300),
	three_four varchar(300),
	five_six varchar(300),
	seven_eigth varchar(300),
	foreign key (color_id) references color(id)
);

insert into color(name) value("azul");
insert into color(name) value("rojo");
insert into color(name) value("verde");
insert into color(name) value("amarillo");
insert into color(name) value("negro");
insert into color(name) value("violeta");
insert into color(name) value("marron");
insert into color(name) value("gris");


insert into e_color_interpretation (color_id,one_two,three_four,five_six,seven_eigth)
	value(1,"Deseos de Armonia","Armonia Alcanzada","Imposibilidad de alcanzar la armonia en el momento actual","deseo de armonia reprimido");
insert into e_color_interpretation (color_id,one_two,three_four,five_six,seven_eigth)
	value(2,"Deseos de Actividad","Actividad Efectiva","Actividad frenada","Rechazo de la actividad");
insert into e_color_interpretation (color_id,one_two,three_four,five_six,seven_eigth)
	value(3,"Deseos de AutoAfirmacion","Autoafirmacion lograda","Necesidad de adaptarse","Dependencia");
insert into e_color_interpretation (color_id,one_two,three_four,five_six,seven_eigth)
	value(4,"Optimismo","","","Miedo a las decepciones");
insert into e_color_interpretation (color_id,one_two,three_four,five_six,seven_eigth)
	value(5,"Deseo de agresividad y enfrentamiento","Agresividad ejercida","Agresion reprimida","Rechazo de la agresion");
insert into e_color_interpretation (color_id,one_two,three_four,five_six,seven_eigth)
	value(6,"Vanidad","Sensibilidad","Capacidad empatica","Escasa capacidad empatica");
insert into e_color_interpretation (color_id,one_two,three_four,five_six,seven_eigth)
	value(7,"Deseo de satisfaccion de necesidades coporales","Necesidades corporales satisfechas","Necesidades corporales reprimidad","Rechazo de las necesidades corporales");
insert into e_color_interpretation (color_id,one_two,three_four,five_six,seven_eigth)
	value(8,"Deseo de la neutralidad","neutralidad alcanzada","Deseo de la neutralidad reprimido","Rechazo de la neutralidad");

create table test(
	id int not null auto_increment primary key,
	name varchar(50) not null,
	description varchar(50) not null
);

insert into test (name, description) value ("8 colores","Prueba de los 8 colores para personalidad");
insert into test (name, description) value ("16FP","Prueba de personalidad de amplio espectro");

create table testdo(
	id int not null auto_increment primary key,
	test_id int not null,
	user_id int not null,
	created_at datetime not null,
	foreign key (test_id) references test(id),
	foreign key (user_id) references user(id)
);

create table color_interpretation_result(
	id int not null auto_increment primary key,
	color1 int not null,
	color2 int not null,
	color3 int not null,
	color4 int not null,
	color5 int not null,
	color6 int not null,
	color7 int not null,
	color8 int not null,
	testdo_id int not null,
	foreign key (color1) references color(id),
	foreign key (color2) references color(id),
	foreign key (color3) references color(id),
	foreign key (color4) references color(id),
	foreign key (color5) references color(id),
	foreign key (color6) references color(id),
	foreign key (color7) references color(id),
	foreign key (color8) references color(id),
	foreign key (testdo_id) references testdo(id)
);

create table 16fpanswer(
	id int not null auto_increment primary key,
	name varchar(100) not null,
	val int not null	
);

insert into 16fpanswer (name,val) value ("Totalmente de acuerdo",5);
insert into 16fpanswer (name,val) value ("De acuerdo",4);
insert into 16fpanswer (name,val) value ("Ni a favor ni encontra",3);
insert into 16fpanswer (name,val) value ("En desacuerdo",2);
insert into 16fpanswer (name,val) value ("Totalmente de desacuerdo",1);


create table 16fpcategory(
	id int not null auto_increment primary key,
	name varchar(50) not null
);

insert into 16fpcategory (name) value ("Afabilidad");
insert into 16fpcategory (name) value ("Razonamiento");
insert into 16fpcategory (name) value ("Estabilidad");
insert into 16fpcategory (name) value ("Dominancia");
insert into 16fpcategory (name) value ("Animacion");
insert into 16fpcategory (name) value ("Atencion a las normas");
insert into 16fpcategory (name) value ("Atrevimiento");
insert into 16fpcategory (name) value ("Sensibilidad");
insert into 16fpcategory (name) value ("Vigilancia");
insert into 16fpcategory (name) value ("Abstraccion");
insert into 16fpcategory (name) value ("Privacidad");
insert into 16fpcategory (name) value ("Aprension");
insert into 16fpcategory (name) value ("Apertura al cambio");
insert into 16fpcategory (name) value ("Autosuficiencia");
insert into 16fpcategory (name) value ("Perfeccionismo");
insert into 16fpcategory (name) value ("Tension");

create table 16fpquestion(
	id int not null auto_increment primary key,
	question varchar(50) not null,
	category_id int not null,
	foreign key (category_id) references 16fpcategory(id)
);


insert into 16fpquestion (question,category_id) value ("Me dejo llevar por los demás",1);
insert into 16fpquestion (question,category_id) value ("Me desanimo con facilidad",1);
insert into 16fpquestion (question,category_id) value ("No me gusta involucrarme en los problemas de los demás",1);
insert into 16fpquestion (question,category_id) value ("Intento seguir las reglas",6);
insert into 16fpquestion (question,category_id) value ("Hago cosas que otros encuentran extrañas",15);
insert into 16fpquestion (question,category_id) value ("Quiero que me dejen en paz",1);
insert into 16fpquestion (question,category_id) value ("Respeto la autoridad",1);
insert into 16fpquestion (question,category_id) value ("No respeto las reglas",1);
insert into 16fpquestion (question,category_id) value ("Hago cosas inesperadas",5);
insert into 16fpquestion (question,category_id) value ("No rehúso hablar de mí mismo",15);
insert into 16fpquestion (question,category_id) value ("Me encanta soñar despierto",1);
insert into 16fpquestion (question,category_id) value ("Me dejo llevar por los demás",3);

create table 16fpresult(
	id int not null auto_increment primary key,
	testdo_id int not null,
	question_id int not null,
	answer_id int not null,
	foreign key (testdo_id) references testdo(id),
	foreign key (question_id) references 16fpquestion(id),
	foreign key (answer_id) references 16fpanswer(id)
);

