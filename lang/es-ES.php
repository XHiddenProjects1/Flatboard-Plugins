<?php
/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * Last update: 2020.01.27
 * All Flatboard code is released under the MIT license.
 * See COPYRIGHT.txt and LICENSE.txt.
*/
# SetLocal
setlocale(LC_ALL, 'es_ES', 'es_ES.utf-8', 'es_ES.utf-8', 'esp');
# Establece la diferencia horaria predeterminada para todas las funciones de fecha / hora  
date_default_timezone_set("Europe/Spain");
# Define la codificación interna
mb_internal_encoding("ISO-8859-1");

$lang = array(
'fr-FR'             => 'Francés',
'en-US'             => 'Inglés',
'ru-RU'             => 'Ruso',
'de-DE'             => 'Alemán',
'it-IT'             => 'Italiano',
'es-ES'             => 'Español',

'in'  => ' <i class="fa fa-clock-o"></i>',
/************* Instalar en pc.php ***************/
'php_version' => '¡Debe tener un servidor con <b> PHP 5.2 </b> o posterior para instalar <b> Flatboard </b>!',
'flatBoard_installer' => 'Instalador FlatBoard',
'welcome_installer' => 'Bienvenido al instalador de Flatboard',
'site_title' => 'El título de su sitio',
'site_slogan' => 'Subtítulo / Descripción del sitio',
'your_admin_psw' => 'Debe ser del tipo: usuario@mypassword',
'site_mail' => 'Su cuenta de correo de administrador aquí',
'install' => 'Instalar en pc',
'installed_title' => '<i class = "fa fa-bullhorn"> </i> ¡Sí! Flatboard ahora está instalado',
'installed_msg' => '¡Ahora, crea foros y comienza a discutir con el mundo! ¿Necesitas ayuda? <a href="https://flatboard.org/view.php/plugin/page/p/docs"> lea el DOC </a>.',

/************* config.php ***************/
'homepage' => 'Pagina de inicio',
'footer_text' => 'Texto de pie de página',
'announcement' => 'Anuncio',
'announcement_desc' => 'Déjelo en blanco para no mostrar el anuncio (HTML permitido).',
'ItemByPage' => 'Elemento por página',
'date_format' => 'Formato de fecha',
'date_format_desc' => 'Formatee una fecha / hora local => <a href="http://php.net/manual/es/function.date.php"> documento PHP </a>.',
'date_format_placeholder' => 'Y/m/d H:i',
'default_date_format' => 'l jS F o, H:i:s',
'short_date_format' => 'Formato de fecha corta',
'maintenance' => 'Mantenimiento',
'maintenance_desc' => ' Los foros están inactivos por mantenimiento. Vuelva a consultar en breve. :)',
'ban_list' => 'Lista de prohibición',
'ban_ok'  => 'Esta dirección IP ahora no está autorizada.',
'ban_fail' => 'Esta dirección IP ya está prohibida.',
'dashboard' => 'Tablero',
'add_worker' => 'Añadir un moderador',
'save' => 'Ahorrar',
'update' => 'Actualizar ',
'theme' => 'Tema',
'theme_desc' => '<a href="config.php/deletecache" class="btn btn-primary btn-sm"> <i class = "fa fa-trash" aria-hidden = "true"> </i> Borrar caché </ a >',
'cache_clean' => 'Caché limpiado',
'folder_deleted' => 'Carpeta eliminada correctamente',
'folder_error' => 'Error durante la eliminación de la carpeta',
'lang' => 'Idioma',
'editor' => 'Editor',
'bbcode' => 'BBcode',
'markdown' => 'Reducción',
'editor_desc' => 'Formato BBcode o Markdown',
'style' => 'Esquema de colores ' .Util::Help('Le permite personalizar el color de la barra de navegación.'),
'style_placeholder' => 'azul pizarra, #000000…',
'nb_page_scroll_infinite' => 'Cuántas páginas desplazarse automáticamente',
'nb_page_scroll_desc' => 'Establézcalo en 1 para deshabilitar el desplazamiento automático.',
'salt' => 'Seguridad clave',
'salt_desc' => 'Déjelo en blanco para generar una clave',
'manage_tags' => 'Administrar etiquetas',
'tags' => 'Etiquetas',
'tags_help' => 'Las etiquetas le permiten "marcar" los títulos de sus discusiones. Hacen que el título sea más atractivo y luego sirven como filtro en sus búsquedas en el foro. <br /> Para mostrarlos, inserte al menos uno en la lista a continuación. <br /> En forma de una nueva discusión, vea aparecer un selector de etiquetas. <div class = "divider"> </div> Cuando se marca la casilla, la palabra clave permanece invisible en la lista cuando se publica una discusión. Esta palabra clave desempeña la función de filtrar los nombres de usuario para convertirse en una identidad verificada. Se proporciona un código de muestra, pero puede modificarlo de forma gratuita.',
'tags_empty' => '¡Lista de etiquetas vacía!',
'replace' => 'Reemplazo',
'tags_result' => 'Resultado',
'blog' => 'Blog',
'blog_new' => 'Seleccione un foro que ofrecerá noticias a su blog.',
'disable_blog' => 'Deshabilitar el blog',
'post_summary' => 'Numere las palabras de la publicación a modo de resumen.',
'hidden_tag' => 'Oculto esta etiqueta',
'title_tag' => '[Mi etiqueta]',
'user' => 'Usuario',
'username_check' => 'Nombre de usuario para comprobar',
'user_checked' => 'Usuario verificado',
'back_to_site' => 'Volver al sitio',
'good-morning' => 'Buenos dias',
'good-afternoon' => 'Buenas tardes',
'good-evening' => 'Buenas noches',
'good-night' => 'Buenas noches',
'hello' => 'Hola',
'note' => 'Nota',

/************* tablero ***************/
'pro_edition' => 'PRO - Gracias por el apoyo Flatboard',
'standard_edition' => 'Estándar- <a class="btn btn-link" href="https://flatboard.org/download.php" onclick="window.open(this.href); return false;">Upgrade to Flatboard PRO</a>',

/************* Sistema de mensajes ***************/
'warning_installation_file' => 'install.php archivo todavía se puede encontrar en su Flatboard root.<br />Por razones de seguridad, se recomienda encarecidamente <a class="badge badge-danger" href="config.php/delinstallfile" title="delete now?">delete it</a>.',
'new_version' => 'Nueva versión disponible',
'theme_not_found' => 'Tema principal de Flatboard no encontrado',

/************* agregar.php ***************/
'topic_added' => '¡Tema añadido!',
'reply_added' => '¡Respuesta añadida!',
'forum_added' => '¡Foro añadido!',
'write_post' => 'Escribe un post...',
'modo_added' => '¡Nuevo moderador añadido!',
'trip' => 'Pseudo ' .Util::Help('No hay necesidad de "registrarse", simplemente ingrese la misma name@password de su elección cada vez. ¡Su contraseña se mostrará cifrada y hash a los visitantes por razones de seguridad!'),
'badge_color' => 'Color de la insignia',
'badge_color_desc' => 'Introduzca un color hexadecimal.',
'font_icon' => 'Categoría de icono',
'font_icon_placeholder' => 'fa-folder',
'font_icon_desc' => 'Vaya al sitio web <a href="http://fontawesome.io/icons/">Font Awesome</a> para elegir un icono',
'email_sent' => 'Correo electrónico enviado correctamente',
'email_nosent' => 'No se pudo enviar correo electrónico',
'report_desc' => 'Nota: El moderador será informado del enlace a la página que está informando.<br />Este formulario es SOLO para informar contenido objetable y no debe usarse como un medio para comunicarse con los moderadores por otras razones..',
'your_email' => 'Su dirección de correo electrónico por si acaso',
'click_to_view_post' => 'Haga clic aquí para ver la publicación',
'order' => 'Orden',
'flood_start' => 'Al menos 60 segundos tienen que pasar entre los puestos. Espere %s minutos e intente publicar de nuevo.',
'private' => 'Haga acceso privado al sitio.',
'restrict_access' => 'Restrinja el acceso al sitio al equipo del foro.',
'private_msg' => 'Lo sentimos, no tiene permisos para abrir esta página.',
'unauthorized_access' => 'Acceso no autorizado',
'no_tag' => 'SIN ETIQUETA',
'more_info' => 'Haga clic aquí para más detalles',
'cancel' => 'Cancelar',
'choose_pic' => 'Elegir una imagen',
'upload' => 'Subir',
'private_forum' => 'Foro privado',
'private_forum_desc' => 'Foro accesible solo para el equipo del sitio.',

/************* Eliminar.php ***************/
'topic_deleted' => '¡Tema eliminado!',
'reply_deleted' => '¡Respuesta eliminada!',
'forum_deleted' => '¡Foro eliminado!',
'worker_deleted' => '¡Moderador eliminado!',
'ip_not_banned' => 'Esta dirección IP no fue prohibida.',
'ip_removed' => 'Esta dirección IP no fue prohibida.',

/************* editar.php ***************/
'topic_edited' => '¡Tema editado!',
'reply_edited' => '¡Respuesta editada!',
'forum_edited' => '¡Foro editado!',
'pinned_homepage' => 'Inmovilizado en casa',
'pick_font' => 'Elegir un icono',
'useSpace' => true,
'home' => 'Hogar',
'thread_sug'  => 'Temas sugeridos',
'change_pwd'  => 'Cambiar mi contraseña',
'topic' => 'Tema',
'newthread' => 'Iniciar una discusión',
'reply' => 'Respuesta',
'replies' => 'Respuestas',
'newreply' => 'Nueva respuesta',
'quote_reply' => 'Responder entre comillas',
'quote_by' => 'Cotización de',
'add_forum'   => 'Añadir foro',
'plugin' => 'Complemento',
'config' => 'Configuración',
'logout' => 'Cerrar sesión',
'login' => 'Iniciar sesión',
'redirect' => 'Volver a',
'add' => 'Agregar',
'edit' => 'Editar',
'delete' => 'Borrar',
'title' => 'Título',
'content' => 'Contenido',
'name' => 'Nombre',
'mail' => 'Correo electrónico',
'mail_desc' => 'nunca se muestra al público',
'not_required' => '(no requerido)',
'search' => 'Buscar',
'forum' => 'Foro',
'password' => 'Contraseña',
'confirm_password' => 'confirmar contraseña',
'powered' => 'Creado con <a href="https://flatboard.org" onclick="window.open(this.href); return false;">Flatboard' .(defined('FLATBOARD_PRO')?' Pro':''). '</a> y <i class="fa fa-heart"></i>.',
'feed' => 'Alimentar',
'none' => 'No hay entrada hasta el momento',
'info' => 'Información',
'date' => 'Fecha',
'activity' => 'Actividad',
'view' => 'Vista',
'count' => 'Correo',
'new' => 'Nuevo',
'more' => 'sigue leyendo',
'submit' => 'Enviar',
'admin' => 'Administrador',
'worker' => 'Moderador',
'sort_forums' => 'Ordenar foros',
'yes' => 'sí',
'no' => 'No',
'locked' => 'Bloqueado',
'no_reply' => 'No puedo responder',
'locked_discussion' => 'bloqueó la discusión.',
'report' => 'Reporte',
'day' => 'día',
'hour' => 'hora',
'minute' => 'minuto',
'second' => 'segundo',
'plural' => 's',
'ago' => 'atrás',
'errLen' => 'Demasiado corto / largo',
'errBot' => 'CAPTCHA incorrecto',
'errNb' => 'Este no es un número entero positivo',
'ErrContentFilter' => 'Ha insertado al menos una palabra censurada, sea cortés.',
'pinned' => 'Fijado',
'stickied_discussion' => 'pegó la discusión.',
'replied' => '<i class="fa fa-share-square"></i> respondido ',
'started' => '<i class="fa fa-bolt"></i> empezado ',
'notFound' => '¡UPS! La página no existe :(',
'errNotMatch' => 'Contraseña incorrecta',
'captcha' => 'Captcha',
'enter_code' => 'Ingrese el código de seguridad',
'math_result' => 'Responde a esta simple pregunta de matemáticas',
'math_captcha' => '¿Usar captcha matemático?',
'r_captcha'   => 'Recargar imagen',
'quickNav' => 'Navegacion rapida',
'invalid_token' => '¡Simbolo no valido!',
'mail_available' => 'Función de envío de correo disponible',
'mail_not_available' => 'Función de envío de correo no disponible',
'statistics' => 'Estadísticas',
'start' => '<div class="alert alert-primary" role="alert"><h6> ¡Felicitaciones! Flatboard ahora está instalado correctamente. </h6> Para comenzar, debe agregar un foro. <a href="add.php/forum" class="btn btn-primary btn-sm"> <i class = "fa fa-plus"></i></a></div>',
'no-forum' => 'No hay foro para mostrar.',

/************* vista.php ***************/
'permalink' => 'Enlace permanente',
'solved' => 'resuelto',
'original_message' => 'DISCUSIÓN DE ORIGEN',
'last_modified' => 'Última modificación por %s el',
'last_post' => 'Ultima publicación',
'user_activity' => 'Vea su actividad.',
'error' => 'ERROR',
'no_plugin' => '¡Este complemento no existe O no está habilitado!',
'want_more' => '¿Quieres leer más? <a href="index.php'. DS.'forum"> Explore todas las categorías </a> o <a href="' .HTML_BASEPATH.'"> vea los temas más recientes </a>.',
'close_del_content' => 'Al cerrar esta ventana con este botón se eliminará el contenido.',
'reply_this_topic' => 'Unirse a la conversación',

/************* buscar.php ***************/
'search_term_found' => 'Término de búsqueda encontrado.',
'search_desc' => 'La investigación se realiza sobre: ​​el autor, el título, la etiqueta y el contenido de un tema.',
'search_holder' => 'Autor, título, etiqueta o contenido.',
'click_tag_search' => 'Haga clic en una etiqueta para insertarla en la búsqueda.',

/************* Enchufar ***************/
'state'        => 'Complemento de encendido / apagado',
'state_on'     => 'Sobre',
'state_off'    => 'Apagado',
'data_save'    => '¡Datos guardados!',
'description'  => 'Descripción',
'author'       => 'Autor',
'check_all'    => 'Comprobar todo',
'plugin_help'    => '<i class="fa fa-warning"></i> Ayudar',
'manage_plugin'    => 'Administrar complemento',
'cantDisable'  => 'Este complemento no se puede deshabilitar.',
'click_to_active'=>'Activa el complemento.',
'click_to_disable'=>'Desactive el complemento.',

/************* auth.php ***************/
'password_changed' => '¡Tu contraseña fue modificada con éxito!',
'edit_password' => 'cambia tu contraseña',
'login_confirm' => 'Conectado con éxito.',
'logout_confirm' => 'Desconectado.',
'incorrect_password' => 'Contraseña incorrecta.',
'error_maxlogin' => 'Demasiados inicios de sesión fallidos. Vuelva a intentarlo en % s minutos.',
'already_logged' => '¡Ya se ha autentificado!',
'already_logged_msg' => 'Ya ha iniciado sesión como <b>%s</b>, debe cerrar la sesión antes de iniciar sesión como un usuario diferente.',
'bad_user_syntax' => 'Su nombre de usuario debe tener la siguiente sintaxis: <b>nombre@contraseña</b>',
'previous_page' => 'la pagina anterior.',

/************* servicios.php ***************/
'ban_user' => 'Prohibir esta IP',
'unban_user' => 'Desbancar esta IP',
'banned' => '¡Has sido baneado!',
'your_banned' => 'Has sido expulsado permanentemente de este foro. <br/> Ponte en contacto con el administrador del foro para obtener más información. <br/> Motivo de la prohibición: como parte de nuestra política activa contra el spam,<br/> tu ip:',
'has_banned' => ' ¡ha sido prohibido!',
'ban' => 'Dirección IP / rangos de direcciones IP'

);
?>
