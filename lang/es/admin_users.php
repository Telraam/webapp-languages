<?php

return [
    // Header
    'users-devices' => 'Usuarios y dispositivos',
    'counted-or-counting' => 'que contaron o siguen contando',
    'add-device' => 'Añadir dispositivo',
    'invite-users' => 'Invitar usuarios',
    'export' => 'Exportar',

    // Subheader
    'overview' => 'Resumen',
    'mails' => 'Correos',
    'reports' => 'Informes',

    // Overview filters
    'all-users-devices' => 'Todos los usuarios y dispositivos (:count)',
    'to-start' => 'Por iniciar (:count)',
    'installing' => 'Instalando (:count)',
    'installed-no-counts' => 'Instalado, pero sin conteos (:count)',
    'is-counting' => 'Está contando (:count)',
    'counted-before' => 'Contó anteriormente (:count)',
    'stopped' => 'Detenido (:count)',
    'did-counting' => 'Está contando, contó antes y detenido (:count)',
    'archived' => 'Archivado (:count)',
    'all-postal-codes' => 'Todos los códigos postales',
    'all-tracks' => 'Todas las rutas',
    'no-tracks-enabled' => 'No hay rutas habilitadas',
    'search' => 'Buscar por nombre, correo electrónico, calle...',
    'filter' => 'Filtrar',

    // Table headers
    'col-date' => 'Fecha',
    'col-name' => 'Nombre',
    'col-device-status' => 'Estado del dispositivo',
    'col-address' => 'Dirección',

    // Overview row labels
    'new-device-sent' => 'Se ha enviado un nuevo dispositivo',
    'device-returned-repair' => 'Dispositivo devuelto para reparación',
    'device-returned' => 'Dispositivo devuelto',
    'new-sd-sent' => 'Se ha enviado una nueva tarjeta SD',
    'outboarded' => 'Dado de baja',
    'network-label' => 'Red',
    'segment' => 'Segmento:',
    'more' => 'Más',
    'edit-details' => 'Editar y detalles',
    'login-as' => 'Iniciar sesión como :name',
    'dearchive' => 'Desarchivar',
    'archive' => 'Archivar',
    'nothing-found' => 'No se encontró nada',
    'nothing-found-dots' => 'No se encontró nada...',
    'empty-info' => 'Un usuario tiene una cuenta Telraam. Una cuenta de usuario consiste en credenciales de acceso (correo electrónico, contraseña) así como cualquier información relacionada con el usuario. En la mayoría de los casos, un usuario tiene o tuvo un dispositivo Telraam. Un usuario solo puede tener un dispositivo activo a la vez.',

    // Add device modal
    'add-network-device-title' => 'Añadir dispositivo gestionado por la red',
    'add-network-device-body' => 'Un dispositivo gestionado por la red es instalado y administrado por usted como administrador de red. Esta funcionalidad solo está disponible para dispositivos con suscripción de red.',
    'read-more-faq' => 'Leer más en las preguntas frecuentes',
    'start-setup' => 'Comenzar con la configuración',

    // Invite modal
    'invite-title' => '¿Desea invitar a algunos ciudadanos a su red?',
    'invite-body' => 'Telraam funciona mejor a través de redes locales y ciudadanos. Con el enlace a continuación, puede invitar fácilmente a ciudadanos a unirse a su red.',
    'copy' => 'Copiar',
    'ok' => 'Aceptar',
    'link-copied' => '¡Enlace copiado al portapapeles!',

    // Edit page
    'no-public-page' => 'Aún sin página pública',
    'setup-page' => 'Página de configuración',
    'network-header' => 'Red',
    'tab-general' => 'General',
    'tab-device' => 'Dispositivo',
    'tab-installation' => 'Instalación',
    'tab-email' => 'Correo electrónico',
    'tab-roi' => 'ROI',
    'tab-advanced' => 'Avanzado',
    'sub-tab-config' => 'Configuración',
    'sub-tab-diagnostics' => 'Diagnósticos',
    'sub-tab-log' => 'Registro',

    // Edit block (user)
    'language' => 'Idioma',
    'network' => 'Red',
    'track' => 'Ruta',
    'quality-remark' => 'Observación de calidad',
    'quality-remark-note' => 'Solo Telraam puede actualizar esto',
    'quality-no-remark' => 'Sin observación, calidad normal (predeterminado)',
    'quality-low-accuracy' => 'Problema general de precisión',
    'quality-bad-connectivity' => 'Problema relacionado con la conectividad',
    'quality-hardware-issue' => 'Problema de hardware o firmware',
    'quality-testing-device' => 'Dispositivo de prueba en uso',
    'member-since' => 'Miembro desde',
    'street-segment' => 'Segmento de calle',
    'no-street-segment' => 'El usuario aún no ha seleccionado un segmento de calle',
    'linked-candidate' => 'Candidato vinculado',
    'status-selected' => 'Seleccionado',
    'status-not-selected' => 'No seleccionado',
    'status-waitinglist' => 'Lista de espera',
    'no-candidate-link' => 'No se encontró ningún vínculo oficial de candidato',
    'save' => 'Guardar',

    // Edit support block
    'outboarding' => 'Baja',
    'device-handed-back' => 'Dispositivo devuelto',
    'candidate' => 'Candidato',
    'received-device' => 'recibió el dispositivo',
    'on' => 'el',
    'on-unknown-date' => 'en fecha desconocida',
    'status' => 'Estado',
    'status-active' => 'Estado activo',
    'status-outboarded' => 'Estado dado de baja / inactivo',
    'outboarding-url' => 'URL de baja',
    'user-outboarded' => 'El usuario está dado de baja',
    'wants-to-send-back' => 'Desea devolver Telraam',
    'did-not-outboard' => 'No se dio de baja',
    'support' => 'Soporte',
    'new-sd-card-sent' => 'Se ha enviado una nueva tarjeta SD',

    // Internal name / network block
    'internal-setup-info' => 'Información de configuración interna',
    'internal-setup-description' => 'Estos son campos adicionales para almacenar información sobre la configuración gestionada por la red, no visible para el público sino solo para uso interno',
    'internal-name' => 'Nombre interno',
    'internal-name-placeholder' => 'Nombre solo para su referencia interna',
    'internal-info' => 'Información interna',
    'internal-info-note' => '(p. ej. procedimiento de configuración, ...)',
    'photo-setup' => 'Foto de la configuración',
    'photo-setup-note' => '(la mejor foto es aquella en la que se ven tanto la carretera como la batería y el panel solar)',

    // ROI tab
    'roi-title' => 'Imágenes y ROI del dispositivo',
    'roi-not-active' => 'Este dispositivo no está activo (estado: :status). El ROI solo puede establecerse en dispositivos activos.',
    'roi-set-button' => 'Establecer región de interés (ROI)',
    'roi-request-image' => 'Solicitar imagen',
    'roi-explicitly-set' => 'ROI establecido explícitamente en',
    'roi-set' => 'ROI establecido en',

    // Diagnostics
    'diagnostics' => 'Diagnósticos',

    // Mail person
    'send' => 'Enviar',

    // ROI limit
    'limit-reached' => 'Límite alcanzado',
    'roi-limit-message' => 'Por favor, espere al menos un día antes de establecer un nuevo ROI',

    // Batch mail
    'who-receives-email' => '¿Quién debe recibir el correo electrónico?',
    'check-all' => 'Seleccionar todos',
    'uncheck-all' => 'Deseleccionar todos',
    'message' => 'Mensaje',
    'save-send-draft' => 'Guardar y enviarme un borrador',
    'save-send' => 'Guardar y enviar',

    // Batch mail overview
    'batch-mail-counting' => 'Envío masivo para usuarios que contaron o siguen contando',
    'batch-mail-counting-subtitle' => 'Usuarios que instalaron Telraam correctamente.',
    'batch-mail-all-counted' => 'Envío masivo para todos los usuarios que contaron',
    'batch-mail-all-counted-subtitle' => 'Todos los usuarios que cuentan y los que no cuentan.',
    'send-new-mail' => 'Enviar un nuevo correo',
    'users-count' => ':count usuarios',

    // Overview export / reports
    'report-counting-title' => 'Usuarios que están contando o contaron',
    'report-counting-subtitle' => 'Cuántos usuarios que alguna vez contaron siguen contando o cuán estable fue su conexión durante los últimos 30 días',
    'report-counting-detail' => 'Este informe muestra el tiempo activo de todos los usuarios de la red que contaron anteriormente en los últimos 30 días. Cada tarde hay una consulta en la que verificamos el estado de todos los usuarios. El resumen da una idea del tiempo activo general de la red.',
    'see-report' => 'Ver informe detallado',
    'report-not-counting-title' => 'Usuarios de la red que nunca contaron',
    'report-not-counting-subtitle' => 'Cuántos usuarios se registraron pero no completaron el procedimiento',
    'report-not-counting-detail' => 'Los usuarios que se registraron pero no completaron el procedimiento de instalación.',
    'col-user-id' => 'ID de usuario',
    'col-user' => 'Usuario',
    'col-email' => 'Correo electrónico',
    'col-street' => 'Calle',
    'col-counting-days' => 'Días de conteo',
    'col-status' => 'Estado',
    'status-not-started' => 'No iniciado',

    // Export table headers
    'export-date' => 'Fecha',
    'export-track' => 'Ruta',
    'export-first-name' => 'Nombre',
    'export-last-name' => 'Apellido',
    'export-email' => 'Correo electrónico',
    'export-official-member' => 'Miembro oficial',
    'export-disabled' => 'Deshabilitado',
    'export-did-count' => '¿Ya contó?',
    'export-initialized' => 'Telraam inicializado',
    'export-is-counting' => '¿Está contando ahora?',
    'export-latest-package' => 'Último paquete de datos (utc)',
    'export-street' => 'Calle',
    'export-zip' => 'Código postal',
    'export-city' => 'Ciudad',
    'export-country' => 'País',
    'export-segment' => 'ID de segmento y posición',
    'export-lat' => 'Latitud de la dirección',
    'export-lng' => 'Longitud de la dirección',
    'export-timezone' => 'Zona horaria',
    'export-stop-form' => 'Baja: formulario de parada rellenado',
    'export-promised-back' => 'Baja: prometió devolver el dispositivo',
    'export-sent-back' => 'Baja: devolvió Telraam',
    'network-managed-installation' => 'Instalación gestionada por la red',

    // User edit (user-edit section)
    'forum-title' => 'Foro Telraam Talks',
    'premium-tier' => 'Premium',
    'timezone-label' => 'Zona horaria',

    // Config tab
    'fw-up-to-date' => 'FW actualizado',
    'fw-upgrade-pending' => 'Actualización de FW pendiente',
    'device-config-title' => 'Configuración del dispositivo',
    'update-config-btn' => 'Actualizar configuración',
    'firmware-config-title' => 'Configuración de firmware',
    'firmware-config-note' => 'un campo a la vez',
    'upgrade-in-progress' => 'Actualización en curso',
    'upgrade-polling' => 'Actualización en curso — consultando el estado cada 30 s',
];
