# lavenderblush

Programa elaborado para realizar diagramas de clases de manera visual e interactiva

### Programación:

1. **Elementos fundamentales del código:**
- Variables: Utilizamos variables PHP para gestionar sesiones (`$_SESSION`), datos de usuario (`$user_id`), y datos de proyectos (`$projectId`).
- Constantes: Se utilizan principalmente en la configuración de la base de datos SQLite.
- Operadores: Empleamos operadores de comparación (`===`, `!==`), lógicos (`&&`, `||`), y de asignación (`=`).
- Tipos de datos: 
  - Strings para nombres de clases y métodos
  - Arrays para almacenar propiedades y métodos
  - Integers para IDs
  - Booleanos para control de estado
  - Objetos PDO para base de datos

2. **Estructuras de control utilizadas:**
- Selección:
  ```php
  if (!logged_in_user_id()) {
      // ... existing code ...
  }
  ```
  - Usamos `if/else` para control de autenticación y validación
  - `switch` para manejar diferentes acciones del usuario

- Repetición:
  ```php
  foreach ($classes as $classData) {
      // ... existing code ...
  }
  ```
  - `foreach` para iterar sobre clases y propiedades
  - `while` para procesamiento de datos

3. **Control de excepciones:**
Sí, implementamos control de excepciones:
```php
try {
    // ... existing code ...
} catch (Exception $e) {
    $db->rollBack();
    http_response_code(500);
    echo "Error saving classes: " . $e->getMessage();
}
```

4. **Documentación del código:**
Sí, utilizamos:
- Comentarios de sección:
```php
/****************************************************
 * 1) HELPER FUNCTIONS
 ****************************************************/
```
- Docstrings para clases generadas:
```php
/**
 * @DiagramInfo
 * @position ...
 * @relationships ...
 */
```

5. **Paradigma aplicado:**
- Orientado a objetos: El proyecto está estructurado en clases y objetos
- Razones:
  - Mejor organización del código
  - Reutilización de componentes
  - Encapsulamiento de funcionalidad
  - Mantenibilidad mejorada

6. **Clases y objetos principales:**
- Clases de gestión de base de datos (PDO)
- Clases de usuario
- Clases de proyecto
- Clases generadas dinámicamente
Relaciones:
- Usuario -> Proyectos (1:N)
- Proyecto -> Clases (1:N)

7. **Conceptos avanzados:**
- Herencia: Utilizada en las clases generadas
- Interfaces: Implementación de interfaces de usuario
- Polimorfismo: En el manejo de diferentes tipos de clases

8. **Gestión de información:**
- Archivos:
  - Generación dinámica de archivos PHP
  - Almacenamiento en directorio 'classes'
- Interfaz gráfica:
  - Interfaz web interactiva
  - Drag & drop para clases
  - Edición en tiempo real

9. **Estructuras de datos:**
- Arrays asociativos para datos de usuario y proyecto
- Colecciones de objetos para clases
- Matrices para posicionamiento de elementos
- JSON para transferencia de datos

10. **Técnicas avanzadas:**
- Expresiones regulares:
```php
$sanitizedClassName = preg_replace('/[^A-Za-z0-9_]/', '', $className);
```
- Flujos de E/S:
```php
$data = file_get_contents("php://input");
```

### Sistemas Informáticos:

1. **Características del hardware:**
- Entorno de desarrollo:
  - Servidor XAMPP local
  - Procesamiento local de PHP
  - Almacenamiento SQLite

2. **Sistema operativo:**
- Windows para desarrollo (evidenciado por las rutas)
- Compatible con múltiples plataformas

3. **Configuración de redes:**
- Servidor web local (XAMPP)
- Protocolo HTTP/HTTPS
- Comunicación cliente-servidor

4. **Copias de seguridad:**
- Sistema de versionado de clases
- Almacenamiento en base de datos SQLite
- Generación de archivos PHP

5. **Seguridad de datos:**
- Autenticación de usuarios
- Validación de sesiones
- Sanitización de entrada de datos
- Control de acceso a proyectos

6. **Configuración de usuarios:**
- Sistema de login
- Gestión de sesiones
- Permisos por proyecto

7. **Documentación técnica:**
- Comentarios en código
- Estructura de archivos organizada
- Documentación de clases generadas

### Entornos de Desarrollo:

1. **IDE utilizado:**
- Editor web integrado
- Herramientas de desarrollo web

2. **Automatización:**
- Generación automática de código
- Gestión automática de dependencias
- Actualización en tiempo real

3. **Control de versiones:**
- Sistema de guardado de versiones de clases
- Control de cambios por proyecto

4. **Refactorización:**
- Sanitización de nombres
- Estructuración de código
- Separación de responsabilidades

5. **Documentación técnica:**
- Markdown en README
- Comentarios estructurados
- Docstrings en clases

6. **Diagramas:**
- Sistema visual de clases
- Interfaz drag & drop
- Relaciones visuales

### Bases de Datos:

1. **Sistema gestor:**
- SQLite
- Razones:
  - Portabilidad
  - Sin servidor adicional
  - Fácil mantenimiento

2. **Modelo entidad-relación:**
- Usuarios
- Proyectos
- Clases
- Relaciones definidas

3. **Funciones avanzadas:**
- Transacciones
- Consultas preparadas
- Índices y claves foráneas

4. **Protección de datos:**
- Transacciones ACID
- Backups automáticos
- Validación de integridad

### Lenguajes de Marcas:

1. **Estructura HTML:**
- HTML5 semántico
- Componentes modulares
- Buenas prácticas

2. **Frontend:**
- CSS personalizado
- JavaScript interactivo
- Diseño responsivo

3. **Interacción DOM:**
- Manipulación dinámica
- Eventos personalizados
- Actualización en tiempo real

4. **Validación:**
- HTML5 válido
- CSS optimizado
- JavaScript modular

5. **Conversión de datos:**
- JSON para API
- Formato de clases
- Intercambio de datos

6. **Gestión empresarial:**
Es una aplicación de gestión empresarial de tipo:
- Sistema de modelado UML
- Herramienta de diseño de software
- Gestión de proyectos colaborativa

    


          
# Análisis del Proyecto Intermodular Lavenderblush

## Objetivo del Software

 Aplicación web diseñada para crear y gestionar diagramas de clases UML de manera visual e interactiva. Los objetivos principales son:

- Facilitar la creación de diagramas de clases mediante una interfaz drag & drop
- Permitir la colaboración en proyectos de modelado UML
- Proporcionar una herramienta educativa para el aprendizaje de programación orientada a objetos
- Gestionar múltiples proyectos y diagramas de forma organizada

## Necesidad Cubierta y Problema Solucionado

El software aborda varias necesidades importantes:

1. **Necesidad Educativa:**
   - Facilita el aprendizaje de conceptos de POO
   - Permite visualizar relaciones entre clases
   - Ayuda en la planificación de proyectos de software

2. **Necesidad Profesional:**
   - Simplifica la documentación de sistemas
   - Mejora la comunicación entre equipos de desarrollo
   - Facilita el mantenimiento de proyectos

3. **Problemas Solucionados:**
   - Complejidad en la creación de diagramas UML
   - Dificultad para colaborar en tiempo real
   - Falta de herramientas web accesibles para modelado

## Stack Tecnológico

### Frontend:
1. **HTML5**
   - Estructura semántica
   - Soporte para drag & drop nativo
   - Templates dinámicos

2. **CSS3**
   - Diseño responsivo
   - Animaciones fluidas
   - Estilos personalizados

3. **JavaScript**
   - Manipulación del DOM
   - Gestión de eventos
   - Comunicación asíncrona

### Backend:
1. **PHP**
   - Gestión de sesiones
   - Procesamiento de datos
   - API REST

2. **SQLite**
   - Base de datos portable
   - Sin necesidad de servidor adicional
   - Transacciones ACID

### Servidor:
- **XAMPP**
  - Entorno de desarrollo integrado
  - Fácil configuración
  - Multiplataforma

### Razones de Elección:
- Tecnologías web estándar y ampliamente soportadas
- Stack LAMP tradicional y probado
- Facilidad de despliegue y mantenimiento
- Curva de aprendizaje moderada

## Desarrollo por Versiones

### Versión 1.0 (MVP)
- Funcionalidad básica de creación de clases
- Interfaz drag & drop simple
- Almacenamiento local

### Versión 1.1
- Sistema de usuarios
- Gestión de proyectos
- Persistencia en base de datos

### Versión 1.2
- Mejoras en la interfaz de usuario
- Sistema de guardado automático
- Validación de datos

### Versión 2.0 (Actual)
- Eliminación de clases
- Colores personalizados
- Mejoras en la experiencia de usuario


            