<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('gl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadeiro.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar baleiro.',
    'The value you selected is not a valid choice.' => 'O valor seleccionado non é unha opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar polo menos {{ limit }} opción.|Debe seleccionar polo menos {{ limit }} opcions.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opcions.',
    'One or more of the given values is invalid.' => 'Un ou máis dos valores indicados non son válidos.',
    'This field was not expected.' => 'Este campo non era esperado.',
    'This field is missing.' => 'Este campo falta.',
    'This value is not a valid date.' => 'Este valor non é unha data válida.',
    'This value is not a valid datetime.' => 'Este valor non é unha data e hora válidas.',
    'This value is not a valid email address.' => 'Este valor non é unha dirección de correo electrónico válida.',
    'The file could not be found.' => 'Non se puido atopar o arquivo.',
    'The file is not readable.' => 'O arquivo non se pode ler.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é demasiado grande ({{ size }} {{ suffix }}). O tamaño máximo permitido é {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'O tipo mime do arquivo non é válido ({{ type }}). Os tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} ou menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor é demasiado longo. Debería ter {{ limit }} carácter ou menos.|Este valor é demasiado longo. Debería ter {{ limit }} caracteres ou menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} ou máis.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor é demasiado curto. Debería ter {{ limit }} carácter ou máis.|Este valor é demasiado corto. Debería ter {{ limit }} caracteres ou máis.',
    'This value should not be blank.' => 'Este valor non debería estar baleiro.',
    'This value should not be null.' => 'Este valor non debería ser null.',
    'This value should be null.' => 'Este valor debería ser null.',
    'This value is not valid.' => 'Este valor non é válido.',
    'This value is not a valid time.' => 'Este valor non é unha hora válida.',
    'This value is not a valid URL.' => 'Este valor non é unha URL válida.',
    'The two values should be equal.' => 'Os dous valores deberían ser iguais.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é demasiado grande. O tamaño máximo permitido é {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'O arquivo é demasiado grande.',
    'The file could not be uploaded.' => 'No se puido cargar o arquivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'O arquivo non é unha imaxe válida.',
    'This is not a valid IP address.' => 'Isto non é unha dirección IP válida.',
    'This value is not a valid language.' => 'Este valor non é un idioma válido.',
    'This value is not a valid locale.' => 'Este valor non é unha localización válida.',
    'This value is not a valid country.' => 'Este valor non é un país válido.',
    'This value is already used.' => 'Este valor xa está a ser empregado.',
    'The size of the image could not be detected.' => 'Non se puido determinar o tamaño da imaxe.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A largura da imaxe é demasiado grande ({{ width }}px). A largura máxima permitida son {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A largura da imaxe é demasiado pequena ({{ width }}px). A largura mínima requerida son {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A altura da imaxe é demasiado grande ({{ height }}px). A altura máxima permitida son {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A altura da imaxe é demasiado pequena ({{ height }}px). A altura mínima requerida son {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser a contrasinal actual do usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería ter exactamente {{ limit }} carácter.|Este valor debería ter exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'O arquivo foi só subido parcialmente.',
    'No file was uploaded.' => 'Non se subiu ningún arquivo.',
    'No temporary folder was configured in php.ini.' => 'Ningunha carpeta temporal foi configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'Non se puido escribir o arquivo temporal no disco.',
    'A PHP extension caused the upload to fail.' => 'Unha extensión de PHP provocou que a subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe conter {{ limit }} elemento ou máis.|Esta colección debe conter {{ limit }} elementos ou máis.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe conter {{ limit }} elemento ou menos.|Esta colección debe conter {{ limit }} elementos ou menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe conter exactamente {{ limit }} elemento.|Esta colección debe conter exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarxeta non válido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarxeta non soportado ou número de tarxeta non válido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Este valor non é un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor non é un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor non é un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor non é nin un ISBN-10 válido nin un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor non é un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor non é unha moeda válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser maior que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser maior ou igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser identico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor ou igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor non debería ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor non debería ser identico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A proporción da imaxe é demasiado grande ({{ ratio }}). A proporción máxima permitida é {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A proporción da é demasiado pequena ({{ ratio }}). A proporción mínima permitida é {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A imaxe é cadrada ({{ width }}x{{ height }}px). As imáxenes cadradas non están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A imaxe está orientada horizontalmente ({{ width }}x{{ height }}px). As imáxenes orientadas horizontalmente non están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A imaxe está orientada verticalmente ({{ width }}x{{ height }}px). As imáxenes orientadas verticalmente non están permitidas.',
    'An empty file is not allowed.' => 'Non está permitido un arquivo baleiro.',
    'The host could not be resolved.' => 'Non se puido resolver o host.',
    'This value does not match the expected {{ charset }} charset.' => 'A codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Non é un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario non debería conter campos adicionais.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo subido é demasiado grande. Por favor, suba un arquivo máis pequeno.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF non é válido. Por favor, probe a enviar novamente o formulario.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocorreu un erro de autenticación.',
    'Authentication credentials could not be found.' => 'Non se atoparon as credenciais de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'A solicitude de autenticación no puido ser procesada debido a un problema do sistema.',
    'Invalid credentials.' => 'Credenciais non válidas.',
    'Cookie has already been used by someone else.' => 'A cookie xa foi empregado por outro usuario.',
    'Not privileged to request the resource.' => 'Non ten privilexios para solicitar o recurso.',
    'Invalid CSRF token.' => 'Token CSRF non válido.',
    'Digest nonce has expired.' => 'O vector de inicialización (digest nonce) expirou.',
    'No authentication provider found to support the authentication token.' => 'Non se atopou un provedor de autenticación que soporte o token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'Non hai ningunha sesión dispoñible, expirou ou as cookies non están habilitadas.',
    'No token could be found.' => 'Non se atopou ningún token.',
    'Username could not be found.' => 'Non se atopou o nome de usuario.',
    'Account has expired.' => 'A conta expirou.',
    'Credentials have expired.' => 'As credenciais expiraron.',
    'Account is disabled.' => 'A conta está deshabilitada.',
    'Account is locked.' => 'A conta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nome do grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'Actualizouse o grupo.',
    'group.flash.created' => 'Creouse o grupo.',
    'group.flash.deleted' => 'Borrouse o grupo.',
    'security.login.username' => 'Nome de usuario',
    'security.login.password' => 'Contrasinal',
    'security.login.remember_me' => 'Lembrar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nome de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'Actualizouse o perfil.',
    'change_password.submit' => 'Cambiar contrasinal',
    'change_password.flash.success' => 'O contrasinal cambiouse con éxito.',
    'registration.check_email' => 'Enviouse un email a %email%. Contén un enlace de activación que deberás premer para activala túa conta.',
    'registration.confirmed' => 'Parabéns %username%, confirmouse a túa conta.',
    'registration.back' => 'Volver á páxina orixinal.',
    'registration.submit' => 'Rexistrar',
    'registration.flash.user_created' => 'Creouse o usuario satisfactoriamente.',
    'registration.email.subject' => 'Benvido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completala validación da túa conta - por favor visita %confirmationUrl%

Atentamente,
o Equipo.
',
    'resetting.password_already_requested' => 'O contrasinal para este usuario solicitouse xa dentro das 24 horas.',
    'resetting.check_email' => 'Enviouse un email %email%. Contén un enlace de activación que deberás premer para restablecelo teu contrasinal.',
    'resetting.request.username' => 'Nome de usuario',
    'resetting.request.submit' => 'Restablecer contrasinal',
    'resetting.reset.submit' => 'Cambiar contrasinal',
    'resetting.flash.success' => 'O contrasinal cambiaouse con éxito.',
    'resetting.email.subject' => 'Benvido %username%!',
    'resetting.email.message' => 'Hola %username%!

Para restablecelo teu contrasinal - por favor visita %confirmationUrl%

Atentamente,
o Equipo.
',
    'layout.logout' => 'Saír',
    'layout.login' => 'Entrar',
    'layout.register' => 'Rexistrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nome de grupo',
    'form.username' => 'Nome de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contrasinal actualizado',
    'form.password' => 'Contrasinal',
    'form.password_confirmation' => 'Repita o contrasinal',
    'form.new_password' => 'Novo contrasinal',
    'form.new_password_confirmation' => 'Repita o contrasinal',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
