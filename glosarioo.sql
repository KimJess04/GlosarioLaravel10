-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2024 a las 14:52:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `glosarioo`
--
CREATE DATABASE IF NOT EXISTS `glosarioo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `glosarioo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_02_16_025349_create_terminos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminos`
--

CREATE TABLE `terminos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `definicion` text NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `terminos`
--

INSERT INTO `terminos` (`id`, `nombre`, `definicion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Clientes', 'Un cliente es un sistema que solicita servicios o datos de un servidor. Un cliente es un ordenador o software que accede a un servidor y recupera servicios especiales o datos de él. Es tarea del cliente estandarizar las solicitudes, transmitirlas al servidor y procesar los datos obtenidos para que puedan visualizarse en un dispositivo de salida como una pantalla.\\r\\n\\r\\nUn cliente no ejecuta tareas de servidor, sino que es simplemente un elemento intermedio. Los clientes típicos son los navegadores web o los clientes de correo electrónico. En el contexto de la web, un navegador web es un ejemplo común de cliente. Cuando accedes a un sitio web, el navegador actúa como cliente y solicita las páginas web al servidor.', 'dist/image/clientee.png', '2024-02-23 18:53:28', '2024-02-23 18:53:28'),
(2, 'Servidor', 'Un servidor es un sistema que contiene datos o proporciona recursos a los que deben acceder otros sistemas de la red.\r\n                    Un servidor es un ordenador especialmente diseñado para procesar información y programas, y distribuirlos a los ordenadores conectados a él.\r\n                    Los tipos de servidor comunes son servidores de archivos que almacenan archivos, servidores de nombres que almacenan\r\n                       nombres y direcciones, servidores de aplicaciones que almacenan programas y aplicaciones y servidores de \r\n                       impresión que planifican y dirigen los trabajos de impresión al destino.\r\n  El servidor atiende y responde a las peticiones que le hacen los otros ordenadores. Los otros ordenadores, que le hacen peticiones, serán los \"clientes\" del servidor.', 'dist/image/servidores.jpg', '2024-02-23 18:59:58', '2024-02-23 18:59:58'),
(3, 'Sistemas de computadoras centrales', 'Es una computadora utilizada principalmente por grandes organizaciones para aplicaciones críticas como datos masivos.\r\n              Por ejemplo, para el procesamiento de transacciones bancarias.\r\n              Los ordenadores centrales cuentan con una arquitectura especializada para garantizar una alta disponibilidad y fiabilidad, lo que es crucial para las operaciones críticas de las organizaciones que los utilizan. Estas computadoras también se caracterizan por ser capaces de procesar grandes cantidades de tareas simultáneamente, con cientos o miles de usuarios trabajando en la misma plataforma al mismo tiempo.', 'dist/image/centrales.jpg', '2024-02-23 19:03:46', '2024-02-23 19:03:46'),
(4, 'Computadoras dedicadas', 'Ordenador físico alojado en un datacenter y asignado a un único cliente, por lo que es posible configurar\r\n                 y gestionar el servidor para adaptarlo a las necesidades específicas de cada proyecto.\r\n              Los servidores dedicados también se conocen como servidores físicos de un solo inquilino o \r\n                servidores dedicados administrados. \r\n              En estos servidores dedicados, el sistema operativo se instala directamente en el mismo, \r\n                lo que permite eliminar niveles y ofrecer un mejor rendimiento.', 'dist/image/dedicadas.jpg', '2024-02-23 19:06:22', '2024-02-23 19:06:22'),
(5, 'Computadoras dedicadas', 'Ordenador físico alojado en un datacenter y asignado a un único cliente, por lo que es posible configurar\r\n                 y gestionar el servidor para adaptarlo a las necesidades específicas de cada proyecto.\r\n              Los servidores dedicados también se conocen como servidores físicos de un solo inquilino o \r\n                servidores dedicados administrados. \r\n              En estos servidores dedicados, el sistema operativo se instala directamente en el mismo, \r\n                lo que permite eliminar niveles y ofrecer un mejor rendimiento.', 'dist/image/dedicadas.jpg', '2024-02-23 19:06:23', '2024-02-23 19:06:23'),
(6, 'Recursos compartidos', 'Un recurso compartido es un recurso local en un servidor (por ejemplo, un directorio de disco, un dispositivo \r\n                de impresión o una canalización con nombre) al que pueden acceder los usuarios y las aplicaciones de la red\r\n              Un recurso compartido permite facilitar recursos como, por ejemplo, archivos o impresoras, a otros usuarios en la red. \r\n              un servidor puede proporcionar servicios a muchos \r\n                clientes al mismo tiempo, y regular el acceso de éstos a un conjunto de \r\n                recursos compartidos', 'dist/image/compartidos.jpg', '2024-02-23 19:08:03', '2024-02-23 19:08:03'),
(7, 'Protocolos asimétricos', 'Tipo de cifrado que utiliza la misma clave criptográfica para cifrar y descifrar. \r\n                Por ello es importante que antes de realizar la comunicación emisor y receptor acuerden la clave a utilizar.\r\n              hay una relación muchos a uno entre los clientes y un \r\n                servidor. Los Clientes siempre inician un diálogo mediante la solicitud de un \r\n                servicio. Los Servidores esperan pasivamente por las solicitudes de los clientes.', 'dist/image/asimetrico.png', '2024-02-23 19:19:07', '2024-02-23 19:19:07'),
(8, 'Encapsulación de servicios', 'El encapsulamiento de servicios se refiere al concepto de ocultar los detalles internos\r\n                de la implementación de un servicio y proporcionar una interfaz bien definida para su uso.\r\n             \r\n\r\n               La encapsulación es un mecanismo para reunir datos y métodos dentro de una estructura ocultando la implementación del objeto, \r\n                es decir, impidiendo el acceso a los datos por cualquier medio que no sean los servicios propuestos.', 'dist/image/encapsulacion.png', '2024-02-23 19:19:48', '2024-02-23 19:19:48'),
(9, 'Escalabilidad', 'Es la capacidad del sistema para manejar un aumento en la carga de trabajo o en el número de usuarios sin degradar significativamente el rendimiento. .\r\n              Un sistema escalable es capaz de crecer y adaptarse eficientemente a mayores demandas sin perder funcionalidad ni rendimiento..\r\n               Los sistemas cliente/servidor pueden ser escalados horizontal o \r\n                verticalmente.\r\n              El escalado horizontal significa añadir o eliminar estaciones clientes con un ligero \r\n                impacto en el rendimiento.\r\n                El escalado vertical significa la migración a una máquina servidora más grande y \r\n                  rápida o la incorporación de nuevas máquinas servidoras.', 'dist/image/escalabilidadH.png', '2024-02-23 19:20:32', '2024-02-23 19:20:32'),
(10, 'Integridad', 'Es la calidad de la información que se transmite entre el cliente y el servidor.\r\n              Asegurar la integridad de los datos es fundamental para garantizar que la información recibida\r\n                 por el servidor o el cliente no haya sido alterada de manera no autorizada durante la transmisión.\r\n              Algunos aspectos relacionados con la integridad en la programación cliente-servidor:\r\n              Integridad de los Datos,              Firmas Digitales,\r\n              Control de Versiones', 'dist/image/integridad.jpeg', '2024-02-23 19:21:29', '2024-02-23 19:21:29'),
(11, 'Infrastructure as a Service (IAAS)', 'Es un modelo de servicio en la nube que proporciona recursos de infraestructura de TI de manera\r\n                 virtualizada a través de internet. \r\n              IaaS es uno de los cuatro tipos de servicios en la nube, junto con el software como servicio (SaaS), la plataforma como servicio (PaaS) y la tecnología sin servidor.\r\n              Un cliente no ejecuta tareas de servidor, sino que es simplemente un elemento intermedio. Los clientes típicos son los navegadores web o los clientes de correo electrónico.\r\n               En el contexto de la web, un navegador web es un ejemplo común de cliente. Cuando accedes a un sitio web, el navegador actúa como cliente y solicita las páginas web al servidor.', 'dist/image/iaas.png', '2024-02-23 19:22:09', '2024-02-23 19:22:09'),
(12, 'Platform as a Service (PAAS)', 'Modelo de servicio en la nube que proporciona una plataforma de desarrollo y ejecución completa para que los desarrolladores construyan, implementen y gestionen aplicaciones sin preocuparse por la complejidad de la infraestructura subyacente.\r\n              PaaS simplifica el proceso de desarrollo de aplicaciones al ofrecer un entorno preconfigurado \r\n                que incluye herramientas y servicios necesarios para el desarrollo y la implementación de \r\n                aplicaciones.', 'dist/image/paas.png', '2024-02-23 19:23:08', '2024-02-23 19:23:08'),
(13, 'Software as a Service (SAAS)', 'Modelo de distribución de software en el que las aplicaciones son proporcionadas por un proveedor de servicios en la nube a través de internet.\r\n               En lugar de comprar e instalar software en dispositivos locales, los usuarios acceden a las aplicaciones SaaS mediante un navegador web. \r\n              Puede acceder a su SaaS desde cualquier dispositivo con conexión a Internet. \r\n              Este modelo elimina la necesidad de gestionar la instalación, mantenimiento y actualización del software a nivel local, ya que todo el proceso se realiza en la nube.', 'dist/image/saas.png', '2024-02-23 19:23:51', '2024-02-23 19:23:51'),
(14, 'Cómputo en la nube', 'La computación en la nube es un modelo de entrega donde el almacenamiento, los servidores, \r\n                las aplicaciones y otros elementos se entregan por Internet. \r\n                Se entrega bajo demanda como servicio, en general como pago por consumo.\r\n              Es disponibilidad a pedido de los recursos de procesamiento como los servicios por Internet.\r\n                 Elimina la necesidad de que las empresas obtengan, configuren o administren recursos por su cuenta; \r\n                 de esta forma, solo paguen por lo que usan.', 'dist/image/nube3.jpg', '2024-02-23 19:24:33', '2024-02-23 19:24:33'),
(16, 'Nuevo concepto', 'Nuevoooooooo', 'dist/image/recursos.jpg', '2024-02-23 19:46:37', '2024-02-23 19:46:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `terminos`
--
ALTER TABLE `terminos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `terminos`
--
ALTER TABLE `terminos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
