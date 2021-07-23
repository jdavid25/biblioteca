-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 22-07-2021 a las 20:31:27
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `base`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_prestamo`
-- 

CREATE TABLE `detalle_prestamo` (
  `codigo` int(11) NOT NULL auto_increment,
  `prestamo` varchar(5) NOT NULL,
  `material` varchar(5) NOT NULL,
  `cantidad` tinyint(4) NOT NULL,
  PRIMARY KEY  (`codigo`),
  KEY `prestamo` (`prestamo`,`material`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `material`
-- 

CREATE TABLE `material` (
  `id_material` varchar(5) NOT NULL,
  `tipo_material` varchar(50) NOT NULL,
  `area` varchar(30) NOT NULL,
  `titulo_materia` varchar(40) NOT NULL,
  PRIMARY KEY  (`id_material`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `prestamo`
-- 

CREATE TABLE `prestamo` (
  `cod_prestamo` varchar(5) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `num_identificacion` varchar(12) NOT NULL,
  PRIMARY KEY  (`cod_prestamo`),
  KEY `num_identificacion` (`num_identificacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `registro`
-- 

CREATE TABLE `registro` (
  `id` int(11) NOT NULL auto_increment,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_material`
-- 

CREATE TABLE `tipo_material` (
  `codigo_material` varchar(4) NOT NULL,
  `tipo_material` varchar(30) NOT NULL,
  PRIMARY KEY  (`codigo_material`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_usuario`
-- 

CREATE TABLE `tipo_usuario` (
  `codigo` int(11) NOT NULL auto_increment,
  `detalle_usuario` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `num_identificacion` varchar(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `tipo_usuario` varchar(40) NOT NULL,
  `grado` varchar(5) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono_celular` varchar(11) NOT NULL,
  PRIMARY KEY  (`num_identificacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
