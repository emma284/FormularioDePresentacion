SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `Empresa`;
DROP TABLE IF EXISTS `Actividad`;
DROP TABLE IF EXISTS `actividadEmpresa`;
DROP TABLE IF EXISTS `GrupoActividad`;
DROP TABLE IF EXISTS `Domicilio`;
DROP TABLE IF EXISTS `Representante`;
DROP TABLE IF EXISTS `Producto`;
DROP TABLE IF EXISTS `Subproducto`;
DROP TABLE IF EXISTS `MateriaPrima`;
DROP TABLE IF EXISTS `Insumo`;
DROP TABLE IF EXISTS `Planta`;
DROP TABLE IF EXISTS `FormacionDePersonal`;
DROP TABLE IF EXISTS `EmisionGaseosa`;
DROP TABLE IF EXISTS `Efluente`;
DROP TABLE IF EXISTS `ResiduosSolidos`;
DROP TABLE IF EXISTS `RiesgoPresunto`;
DROP TABLE IF EXISTS `Perito`;
DROP TABLE IF EXISTS `PartidaInmobiliaria`;
DROP TABLE IF EXISTS `Tanque`;
DROP TABLE IF EXISTS `SustanciasAux`;
DROP TABLE IF EXISTS `SustanciasAuxYFluidos`;
DROP TABLE IF EXISTS `InmueblesAnexos`;
DROP TABLE IF EXISTS `Servicio`;
DROP TABLE IF EXISTS `Localidades`;
DROP TABLE IF EXISTS `Departamentos`;
DROP TABLE IF EXISTS `Nodos`;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE `Empresa` (
    `cuit` int NOT NULL,
    `razonSocial` varchar(50) NOT NULL,
    `fechaInicioActividades` date NOT NULL,
    `tipoPersona` int NOT NULL,
    `idPerito` int NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Actividad` (
    `cuacm` int NOT NULL,
    `nombreActividad` varchar(100) NOT NULL,
    `estandar` int NOT NULL,
    `idGrupo` char NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `actividadEmpresa` (
    `idEmpresa` int NOT NULL,
    `idActividad` int NOT NULL,
    `prioridad` varchar(20) NOT NULL,
    PRIMARY KEY (`idEmpresa`, `idActividad`)
);

CREATE TABLE `GrupoActividad` (
    `id` char NOT NULL,
    `nombreGrupo` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Domicilio` (
    `idEmpresa` int NOT NULL,
    `tipo` varchar(20) NOT NULL,
    `calle` varchar(50) NOT NULL,
    `numero` varchar(6) NOT NULL,
    `piso` int NOT NULL,
    `depto` varchar(6) NOT NULL,
    `idLocalidad` int NOT NULL,
    `telefono` int NOT NULL,
    `email` varchar(50) NOT NULL,
    `zonificacion` varchar(50) NOT NULL,
    `idPlanta` int,
    `idPartida` int,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Representante` (
    `documento` int NOT NULL,
    `apellido` varchar(50) NOT NULL,
    `nombre` varchar(50) NOT NULL,
    `cargo` varchar(50) NOT NULL,
    `idEmpresa` int NOT NULL,
    `tipo` varchar(20) NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Producto` (
    `id` int NOT NULL,
    `nombre` varchar(50) NOT NULL,
    `estadoFisico` varchar(20) NOT NULL,
    `produccionAnual` double NOT NULL,
    `unidad` varchar(10) NOT NULL,
    `almacenamiento` varchar(100) NOT NULL,
    `clasificacion` varchar(20) NOT NULL,
    `especificacion` varchar(200) NOT NULL,
    `idPlanta` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Subproducto` (
    `nombre` varchar(50) NOT NULL,
    `estadoFisico` varchar(20) NOT NULL,
    `produccionAnual` double NOT NULL,
    `unidad` varchar(10) NOT NULL,
    `almacenamiento` varchar(100) NOT NULL,
    `idPlanta` int NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `MateriaPrima` (
    `nombre` varchar(50) NOT NULL,
    `estadoFisico` varchar(20) NOT NULL,
    `consumoAnual` double NOT NULL,
    `unidad` varchar(10) NOT NULL,
    `almacenamiento` varchar(100) NOT NULL,
    `idPlanta` int NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Insumo` (
    `nombre` varchar(50) NOT NULL,
    `estadoFisico` varchar(20) NOT NULL,
    `consumoAnual` double NOT NULL,
    `unidad` varchar(10) NOT NULL,
    `almacenamiento` varchar(100) NOT NULL,
    `idPlanta` int NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Planta` (
    `id` int NOT NULL,
    `idEmpresa` int NOT NULL,
    `fueraProv` boolean NOT NULL,
    `superficieDeposito` double NOT NULL,
    `superficieTotalM2` double NOT NULL,
    `superficieCubiertaM2` double NOT NULL,
    `potenciaInstaladaHP` double NOT NULL,
    `dotacionDePersonal` int NOT NULL,
    `fechaInicioActividades` date NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `FormacionDePersonal` (
    `cantidadObreros` int NOT NULL,
    `capacitacionObreros` boolean NOT NULL,
    `cantidadTecnicos` int NOT NULL,
    `capacitacionTecnicos` boolean NOT NULL,
    `cantidadProfesionales` int NOT NULL,
    `capacitacionProfesionales` boolean NOT NULL,
    `idPlanta` int NOT NULL,
    `idFormacionPersonal` int NOT NULL,
    PRIMARY KEY (`idFormacionPersonal`)
);

CREATE TABLE `EmisionGaseosa` (
    `tipo` varchar(60) NOT NULL,
    `emision` varchar(50) NOT NULL,
    `procesoGenerador` varchar(100) NOT NULL,
    `tratamiento` varchar(100) NOT NULL,
    `componentesRelevantes` varchar(100) NOT NULL,
    `idPlanta` int NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Efluente` (
    `procesoGenerador` varchar(50) NOT NULL,
    `componentesRelevantes` varchar(100) NOT NULL,
    `volumen` double NOT NULL,
    `unidad` varchar(5) NOT NULL,
    `unidadDeTiempo` varchar(10) NOT NULL,
    `gestion` varchar(200) NOT NULL,
    `cuerpoReceptor` varchar(200) NOT NULL,
    `idPlanta` int NOT NULL,
    `id` int NOT NULL,
    `tipo` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `ResiduosSolidos` (
    `residuo` varchar(150) NOT NULL,
    `cantidad` double NOT NULL,
    `unidad` varchar(10) NOT NULL,
    `periodo` varchar(10) NOT NULL,
    `procesoGenerador` varchar(50) NOT NULL,
    `gestion` varchar(200) NOT NULL,
    `idPlanta` int NOT NULL,
    `id` int NOT NULL,
    `tipo` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `RiesgoPresunto` (
    `fuentesMoviles` boolean NOT NULL,
    `aparatosSometidos` boolean NOT NULL,
    `sustanciasQuimicas` boolean NOT NULL,
    `explosion` boolean NOT NULL,
    `incendio` boolean NOT NULL,
    `otro` boolean NOT NULL,
    `observaciones` varchar(200) NOT NULL,
    `idPlanta` int NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Perito` (
    `nroRegistro` int NOT NULL,
    `apellido` varchar(50) NOT NULL,
    `nombre` varchar(50) NOT NULL,
    `profesion` varchar(50) NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `PartidaInmobiliaria` (
    `nroPartida` varchar(50) NOT NULL,
    `latitud` varchar(15) NOT NULL,
    `longitud` varchar(15) NOT NULL,
    `id` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Tanque` (
    `id` int NOT NULL,
    `cantidad` int NOT NULL,
    `capacidadTotal` double NOT NULL,
    `unidad` varchar(2) NOT NULL,
    `idPlanta` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `SustanciasAux` (
    `id` int NOT NULL,
    `combustiblesLiquidos` boolean NOT NULL,
    `aireComprimido` boolean NOT NULL,
    `gasNatural` boolean NOT NULL,
    `aceitesYLubricantes` boolean NOT NULL,
    `idPlanta` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `SustanciasAuxYFluidos` (
    `id` int NOT NULL,
    `nombre` varchar(50) NOT NULL,
    `consumoAnual` double NOT NULL,
    `unidad` varchar(10) NOT NULL,
    `almacenamiento` varchar(50) NOT NULL,
    `idPlanta` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `InmueblesAnexos` (
    `id` int NOT NULL,
    `domicilio` varchar(100) NOT NULL,
    `actividad` varchar(100) NOT NULL,
    `idPlanta` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Servicio` (
    `id` int NOT NULL,
    `energiaElectrica` boolean NOT NULL,
    `cloacas` boolean NOT NULL,
    `aguaRed` boolean NOT NULL,
    `gasNatural` boolean NOT NULL,
    `idPlanta` int NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Localidades` (
    `id` int NOT NULL,
    `nombre_localidad` varchar(50) NOT NULL,
    `idDepartamento` int NOT NULL,
    `idNodo` int NOT NULL,
    `categoria` varchar(50) NOT NULL,
    `codigo_postal` varchar(8) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Departamentos` (
    `id` int NOT NULL,
    `nombreDepartamento` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Nodos` (
    `id` int NOT NULL,
    `nombreNodo` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);

ALTER TABLE `Empresa` ADD FOREIGN KEY (`idPerito`) REFERENCES `Perito`(`id`);
ALTER TABLE `Actividad` ADD FOREIGN KEY (`idGrupo`) REFERENCES `GrupoActividad`(`id`);
ALTER TABLE `actividadEmpresa` ADD FOREIGN KEY (`idEmpresa`) REFERENCES `Empresa`(`id`);
ALTER TABLE `actividadEmpresa` ADD FOREIGN KEY (`idActividad`) REFERENCES `Actividad`(`id`);
ALTER TABLE `Domicilio` ADD FOREIGN KEY (`idEmpresa`) REFERENCES `Empresa`(`id`);
ALTER TABLE `Domicilio` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `Domicilio` ADD FOREIGN KEY (`idPartida`) REFERENCES `PartidaInmobiliaria`(`id`);
ALTER TABLE `Domicilio` ADD FOREIGN KEY (`idLocalidad`) REFERENCES `Localidades`(`id`);
ALTER TABLE `Representante` ADD FOREIGN KEY (`idEmpresa`) REFERENCES `Empresa`(`id`);
ALTER TABLE `Producto` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `Subproducto` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `MateriaPrima` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `Insumo` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `Planta` ADD FOREIGN KEY (`idEmpresa`) REFERENCES `Empresa`(`id`);
ALTER TABLE `FormacionDePersonal` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `EmisionGaseosa` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `Efluente` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `ResiduosSolidos` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `RiesgoPresunto` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `Tanque` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `SustanciasAux` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `SustanciasAuxYFluidos` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `InmueblesAnexos` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `Servicio` ADD FOREIGN KEY (`idPlanta`) REFERENCES `Planta`(`id`);
ALTER TABLE `Localidades` ADD FOREIGN KEY (`idDepartamento`) REFERENCES `Departamentos`(`id`);
ALTER TABLE `Localidades` ADD FOREIGN KEY (`idNodo`) REFERENCES `Nodos`(`id`);