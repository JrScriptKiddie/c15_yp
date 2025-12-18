<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'Пользователь',
      'action' => 'Действие',
      'createdAt' => 'Дата',
      'userType' => 'Тип пользователя',
      'target' => 'Цель',
      'targetType' => 'Тип цели',
      'authToken' => 'Токен аутентификации',
      'ipAddress' => 'IP адрес',
      'authLogRecord' => 'Запись журнала Аутентификации'
    ],
    'links' => [
      'authToken' => 'Токен аутентификации',
      'authLogRecord' => 'Запись журнал Аутентификации',
      'user' => 'Пользователь',
      'target' => 'Цель'
    ],
    'presetFilters' => [
      'onlyMy' => 'Только мои'
    ],
    'options' => [
      'action' => [
        'read' => 'Прочитано',
        'update' => 'Обновить',
        'delete' => 'Удалить',
        'create' => 'Создать'
      ]
    ]
  ],
  'AddressCountry' => [
    'labels' => [
      'Create AddressCountry' => 'Create Address Country',
      'Populate' => 'Populate'
    ],
    'fields' => [
      'code' => 'Code',
      'isPreferred' => 'Is Preferred'
    ],
    'tooltips' => [
      'code' => 'ISO 3166-1 alpha-2 code.',
      'isPreferred' => 'Preferred countries appear first in the picklist.'
    ],
    'messages' => [
      'confirmPopulateDefaults' => 'All existing countries will be deleted, the default country list will be created. It won\'t be possible to revert the operation.

Are you sure?'
    ],
    'strings' => [
      'populateDefaults' => 'Populate with default country list'
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Включено',
      'Disabled' => 'Отключено',
      'System' => 'Система',
      'Users' => 'Пользователи',
      'Email' => 'Эл. почта',
      'Messaging' => 'Обмен сообщениями',
      'Data' => 'Данные',
      'Misc' => 'Прочее',
      'Setup' => 'Setup',
      'Customization' => 'Индивидуальная настройка',
      'Available Fields' => 'Доступные поля',
      'Layout' => 'Макет',
      'Entity Manager' => 'Управление объектами',
      'Add Panel' => 'Добавить панель',
      'Add Field' => 'Добавить поле',
      'Settings' => 'Настройки',
      'Scheduled Jobs' => 'Планировщик заданий',
      'Upgrade' => 'Обновление',
      'Clear Cache' => 'Очистить кэш',
      'Rebuild' => 'Перестроить ПО',
      'Teams' => 'Группы',
      'Roles' => 'Роли',
      'Portal' => 'Портал',
      'Portals' => 'Порталы',
      'Portal Roles' => 'Роли порталов',
      'Portal Users' => 'Пользователи портала',
      'API Users' => 'API пользователи',
      'Outbound Emails' => 'Исходящая эл. почта',
      'Group Email Accounts' => 'Учетные записи эл. почты групп',
      'Personal Email Accounts' => 'Учетные записи эл. почты пользователей',
      'Inbound Emails' => 'Входящая эл. почта',
      'Email Templates' => 'Шаблоны эл. писем',
      'Import' => 'Импортирование',
      'Layout Manager' => 'Управление макетами',
      'User Interface' => 'Интерфейс пользователя',
      'Auth Tokens' => 'Токены сессий аутентификации',
      'Auth Log' => 'Журнал Аутентификации',
      'App Log' => 'App Log',
      'App Secrets' => 'App Secrets',
      'Authentication' => 'Аутентификация',
      'Currency' => 'Валюта',
      'Integrations' => 'Интеграции',
      'Extensions' => 'Расширения',
      'Webhooks' => 'Вебхуки',
      'Dashboard Templates' => 'Шаблоны панели виджетов',
      'Upload' => 'Загрузить',
      'Installing...' => 'Установка...',
      'Upgrading...' => 'Обновление...',
      'Upgraded successfully' => 'Успешно обновлено',
      'Installed successfully' => 'Успешно установлено',
      'Ready for upgrade' => 'Готово к обновлению',
      'Run Upgrade' => 'Установить обновление',
      'Install' => 'Установить',
      'Ready for installation' => 'Готово к установке',
      'Uninstalling...' => 'Удаление...',
      'Uninstalled' => 'Удалено',
      'Create Entity' => 'Создать объект',
      'Edit Entity' => 'Редактировать объект',
      'Create Link' => 'Создать ссылку',
      'Edit Link' => 'Редактировать ссылку',
      'Notifications' => 'Оповещения',
      'Jobs' => 'Задания',
      'Job Settings' => 'Параметры обработки для "crone"',
      'Reset to Default' => 'Восстановить умолчания',
      'Email Filters' => 'Фильтры эл. почты',
      'Action History' => 'История действий',
      'Label Manager' => 'Управление метками',
      'Template Manager' => 'Менеджер Шаблонов',
      'Lead Capture' => 'Захват кандидата',
      'Attachments' => 'Вложения',
      'System Requirements' => 'Системные требования',
      'PDF Templates' => 'Шаблоны PDF',
      'PHP Settings' => 'Конфигурация PHP',
      'Database Settings' => 'Конфигурация Базы Данных',
      'Permissions' => 'Права Доступа',
      'Email Addresses' => 'Адреса эл. почты',
      'Phone Numbers' => 'Телефонные номера',
      'Layout Sets' => 'Наборы макетов',
      'Working Time Calendars' => 'Календари рабочего времени',
      'Group Email Folders' => 'Групповые папки эл. почты',
      'Authentication Providers' => 'Поставщики аутентификации',
      'Address Countries' => 'Address Countries',
      'OAuth Providers' => 'OAuth Providers',
      'Success' => 'Операция завершилась успешно',
      'Fail' => 'Операция завершилась неудачей',
      'Configuration Instructions' => 'Инструкции по настройке',
      'Formula Sandbox' => 'Песочница скриптов',
      'is recommended' => 'рекомендовано',
      'extension is missing' => 'расширение отсутствует'
    ],
    'layouts' => [
      'list' => 'Список',
      'detail' => 'Детализация',
      'listSmall' => 'Список (сжатый)',
      'detailSmall' => 'Детализация (сжатая)',
      'detailPortal' => 'Детализация (Portal)',
      'detailSmallPortal' => 'Детализация (Cжатая, Portal)',
      'listSmallPortal' => 'Список (Сжатый, Portal)',
      'listPortal' => 'Список (Portal)',
      'relationshipsPortal' => 'Отношения (Portal)',
      'filters' => 'Фильтры поиска',
      'massUpdate' => 'Массовое обновление',
      'relationships' => 'Отношения',
      'defaultSidePanel' => 'Поля боковой панели',
      'bottomPanelsDetail' => 'Нижняя панель',
      'bottomPanelsEdit' => 'Нижние панели (Правка)',
      'bottomPanelsDetailSmall' => 'Нижние панели (мелкие детали)',
      'bottomPanelsEditSmall' => 'Нижние панели (мелкое редактирование)',
      'sidePanelsDetail' => 'Боковые панели (Detail)',
      'sidePanelsEdit' => 'Боковые панели (Edit)',
      'sidePanelsDetailSmall' => 'Боковые панели (Detail Small)',
      'sidePanelsEditSmall' => 'Боковые панели (Edit Small)',
      'kanban' => 'Kanban- метод "точно в срок"',
      'detailConvert' => 'Конвертировать кандидата',
      'listForAccount' => 'Список (для контрагента)',
      'listForContact' => 'Список (для контакта)'
    ],
    'fieldTypes' => [
      'base' => 'Base',
      'address' => 'Адресс',
      'array' => 'Массив',
      'foreign' => 'Внешний',
      'duration' => 'Длительность',
      'password' => 'Пароль',
      'personName' => 'Имя человека',
      'autoincrement' => 'Автоинкрементый',
      'bool' => 'Логический тип',
      'currency' => 'Валюта',
      'currencyConverted' => 'Валюта (сконвертированная)',
      'date' => 'Дата',
      'datetime' => 'Дата-время',
      'datetimeOptional' => 'Дата/Дата-время',
      'email' => 'Эл. почта',
      'enum' => 'Список',
      'enumInt' => 'Список целые числа',
      'enumFloat' => 'Список дробные числа',
      'float' => 'Десятичная дробь',
      'int' => 'Целое число',
      'link' => 'Ссылка',
      'linkMultiple' => 'Связь (Многие)',
      'linkParent' => 'Связь (Отец)',
      'linkOne' => 'Связь (Один)',
      'phone' => 'Телефон',
      'text' => 'Текст',
      'url' => 'Url-адрес ресурса',
      'urlMultiple' => 'Url Multiple',
      'varchar' => 'Строка',
      'file' => 'Файл',
      'image' => 'Изображение',
      'multiEnum' => 'Множественный список',
      'attachmentMultiple' => 'Несколько вложений',
      'rangeInt' => 'Целочисленный диапазон',
      'rangeFloat' => 'Дробовочисленный диапазон',
      'rangeCurrency' => 'Денежный диапазон',
      'wysiwyg' => 'Редактор',
      'map' => 'Карта',
      'number' => 'Номер',
      'colorpicker' => 'Выбор цвета',
      'checklist' => 'Контрольный список',
      'barcode' => 'Штрих-код',
      'jsonArray' => 'Json массив',
      'jsonObject' => 'Json объект'
    ],
    'fields' => [
      'type' => 'Тип',
      'name' => 'Название',
      'label' => 'Отображаемое имя',
      'tooltipText' => 'Текст подсказки',
      'required' => 'Обязательное поле',
      'default' => 'По умолчанию',
      'maxLength' => 'Максимальная длина',
      'options' => 'Варианты',
      'optionsReference' => 'Справочник по опциям',
      'after' => 'После (поля)',
      'before' => 'Перед (полем)',
      'link' => 'Ссылка',
      'field' => 'Поле',
      'min' => 'Минимальное значение',
      'max' => 'Максимальное значение',
      'translation' => 'Перевод',
      'previewSize' => 'Размер предпросмотра',
      'listPreviewSize' => 'Предварительный просмотр в виде списка',
      'noEmptyString' => 'Пустое значение строки недопустимо',
      'defaultType' => 'Тип по умолчанию',
      'seeMoreDisabled' => 'Отключить обрезку текста',
      'cutHeight' => 'Высота среза (px)',
      'entityList' => 'Список объектов',
      'isSorted' => 'Сортировать (по алфавиту)',
      'audited' => 'Аудит (отслеживать изменения значений)',
      'trim' => 'Удалять лишние пробелы (Trim)',
      'height' => 'Высота (в пикс.)',
      'minHeight' => 'Минимальная высота (в пикс.)',
      'provider' => 'Поставщик',
      'typeList' => 'Список типов',
      'rows' => 'Max number of rows',
      'lengthOfCut' => 'Длина перед обрезкой',
      'sourceList' => 'Список источников',
      'prefix' => 'Префикс',
      'nextNumber' => 'Следующий номер',
      'padLength' => 'Определенная длина',
      'disableFormatting' => 'Отключить форматирование',
      'dynamicLogicVisible' => 'Условия, которые делают поле видимым',
      'dynamicLogicReadOnly' => 'Условия, которые делают поле только для чтения',
      'dynamicLogicRequired' => 'Условия, которые делают поле обязательным',
      'dynamicLogicOptions' => 'Условные варианты',
      'dynamicLogicInvalid' => 'Условия, делающие поле недействительным',
      'dynamicLogicReadOnlySaved' => 'Saved state conditions making field read-only',
      'probabilityMap' => 'Стадия вероятности (%)',
      'notActualOptions' => 'Не актуальные варианты',
      'activeOptions' => 'Active Options',
      'readOnly' => 'Только чтение',
      'readOnlyAfterCreate' => 'Read-only After Create',
      'preview' => 'Preview',
      'attachmentField' => 'Attachment Field',
      'maxFileSize' => 'Максимальный размер файла (Mb)',
      'isPersonalData' => 'Личные данные',
      'useIframe' => 'Использовать Iframe',
      'useNumericFormat' => 'Использовать числовой формат',
      'strip' => 'Стрип',
      'minuteStep' => 'Интервал в минутах',
      'inlineEditDisabled' => 'Отключить встроенное редактирование',
      'allowCustomOptions' => 'Разрешить пользовательские варианты',
      'displayAsLabel' => 'Отображать как метку',
      'displayAsList' => 'Отображать как список',
      'labelType' => 'Label Type',
      'maxCount' => 'Максимальное количество элементов',
      'accept' => 'Принять',
      'viewMap' => 'Кнопка просмотра карты',
      'codeType' => 'Тип кода',
      'lastChar' => 'Последний знак',
      'onlyDefaultCurrency' => 'Только валюта по умолчанию',
      'decimal' => 'Десятичная дробь',
      'displayRawText' => 'Показать необработанный текст (без markdown)',
      'conversionDisabled' => 'Отключить преобразование',
      'decimalPlaces' => 'Десятичные знаки',
      'pattern' => 'Шаблон',
      'globalRestrictions' => 'Глобальные ограничения',
      'copyToClipboard' => 'Кнопка копирования в буфер обмена',
      'createButton' => 'Create Button',
      'autocompleteOnEmpty' => 'Autocomplete on empty input',
      'relateOnImport' => 'Relate on Import',
      'aclScope' => 'ACL Scope',
      'onlyAdmin' => 'Only for Admin',
      'notStorable' => 'Not Storable',
      'itemsEditable' => 'Items Editable'
    ],
    'strings' => [
      'rebuildRequired' => 'Требуется перестройка'
    ],
    'messages' => [
      'cacheIsDisabled' => 'Cache is disabled, the application will run slow. Enable cache in the [settings](#Admin/settings).',
      'formulaFunctions' => 'Дополнительные функции можно найти в [документации] ({documentationUrl}).',
      'rebuildRequired' => 'Вам нужно перезапуститься из командной строки.',
      'upgradeVersion' => 'EspoCRM будет обновлен до версии **{version}**. Пожалуйста, будьте терпеливы, так как это может занять некоторое время.',
      'upgradeDone' => 'EspoCRM был обновлён до версии **{version}**.',
      'upgradeBackup' => 'Перед обновлением рекомендуется сделать резервную копию ваших файлов и данных EspoCRM.',
      'thousandSeparatorEqualsDecimalMark' => 'Разделитель тысячных не может быть таким же, как разделитель десятичных.',
      'userHasNoEmailAddress' => 'У пользователя нет адреса эл. почты.',
      'selectEntityType' => 'Выберите тип объекта в левом меню.',
      'selectUpgradePackage' => 'Выберите пакет обновления',
      'downloadUpgradePackage' => 'Загрузите пакет(ы) обновлений [здесь]({url}).',
      'selectLayout' => 'Выберите интересующий макет в левом меню и отредактируйте его.',
      'selectExtensionPackage' => 'Выберите пакет расширения',
      'extensionInstalled' => 'Расширение {name} {version} было установлено.',
      'installExtension' => 'Расширение {name} {version} готово к установке.',
      'cronIsDisabled' => 'Cron is disabled, the application is not fully functional. Enable cron in the [settings](#Admin/settings).',
      'cronIsNotConfigured' => 'Запланированные задания не выполняются. Следовательно, входящие письма, уведомления и напоминания не работают. Пожалуйста, следуйте инструкциям [https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) для установки cron job.',
      'newVersionIsAvailable' => 'Доступна новая версия EspoCRM {latestVersion}. Пожалуйста, следуйте [инструкциям](https://www.espocrm.com/documentation/administration/upgrading/), чтобы обновить ваш экземпляр.',
      'newExtensionVersionIsAvailable' => 'Новая {extensionName} версия {latestVersion} доступна.',
      'uninstallConfirmation' => 'Вы действительно хотите удалить расширение?',
      'upgradeInfo' => 'Посмотрите [документацию]({url}) о том, как обновить EspoCRM.',
      'upgradeRecommendation' => 'Этот способ обновления не рекомендуется. Лучше обновлять с CLI.'
    ],
    'descriptions' => [
      'settings' => 'Системные настройки.',
      'scheduledJob' => 'Выполняемые с помощью cron задания.',
      'jobs' => 'Задания выполняются в фоновом режиме.',
      'upgrade' => 'Обновить EspoCRM.',
      'clearCache' => 'Очистить кэш сервера.',
      'rebuild' => 'Перестроить серверную часть ПО и очистить кэш сервера.',
      'users' => 'Управление пользователями.',
      'teams' => 'Управление группами.',
      'roles' => 'Управление ролями.',
      'portals' => 'Управление порталами.',
      'portalRoles' => 'Управление ролями для порталов.',
      'portalUsers' => 'Пользователи портала.',
      'outboundEmails' => 'Настройки SMTP для исходящих сообщений эл. почты.',
      'groupEmailAccounts' => 'Учетные записи эл. почты групп (IMAP). Импортирование сообщений эл. почты и автоматическая конвертация входящих эл. писем в обращения (Email-to-Case).',
      'personalEmailAccounts' => 'Учетные записи эл. почты пользователей.',
      'emailTemplates' => 'Шаблоны исходящих эл. писем.',
      'import' => 'Импортирование данных из CSV файла.',
      'layoutManager' => 'Редактирование макетов (списки, детализации, редактирование, поиск, массовое обновление).',
      'entityManager' => 'Создавайте и редактируйте объекты. Управлейте полями и отношениями.',
      'userInterface' => 'Настройки пользовательского интерфейса.',
      'authTokens' => 'Активные сессии аутентификации. IP-адрес и дата последнего подключения.',
      'authentication' => 'Настройки аутентификации.',
      'currency' => 'Настройки и курсы валют.',
      'extensions' => 'Установить или удалить расширения.',
      'integrations' => 'Интеграция со сторонними сервисами.',
      'notifications' => 'Настройка оповещений (в приложении и по эл. почте).',
      'inboundEmails' => 'Настройки для входящих сообщений эл. почты.',
      'emailFilters' => 'Сообщения эл. почты, соответствующие указанному фильтру, не будут импортированы.',
      'groupEmailFolders' => 'Общие папки эл. писем для групп.',
      'actionHistory' => 'Журнал действий пользователя.',
      'labelManager' => 'Настройте метки приложения.',
      'templateManager' => 'Настроить шаблоны сообщений.',
      'authLog' => 'История входа.',
      'appLog' => 'Application log.',
      'appSecrets' => 'Store sensitive information like API keys, passwords, and other secrets.',
      'leadCapture' => 'Lead capture endpoints and web forms.',
      'attachments' => 'Все вложения, хранящиеся в системе.',
      'systemRequirements' => 'Системные требования для EspoCRM.',
      'apiUsers' => 'Отдельные пользователи для целей интеграции.',
      'webhooks' => 'Управление вебхуками.',
      'authenticationProviders' => 'Дополнительные поставщики аутентификации для порталов.',
      'emailAddresses' => 'Все адреса электронной почты хранятся в системе.',
      'phoneNumbers' => 'Все телефонные номера, которые хранятся в системе.',
      'dashboardTemplates' => 'Применить панели виджетов для пользователей.',
      'layoutSets' => 'Коллекции макетов, которые можно назначать командам и порталам.',
      'workingTimeCalendars' => 'График работы.',
      'jobsSettings' => 'Настройки обработки заданий. Задания выполняют задачи в фоновом режиме.',
      'sms' => 'Настройки SMS.',
      'pdfTemplates' => 'Шаблоны для печати в PDF.',
      'formulaSandbox' => 'Написание и тестирование скриптов формул.',
      'addressCountries' => 'Countries available for address fields.',
      'oAuthProviders' => 'OAuth providers for integrations.'
    ],
    'keywords' => [
      'settings' => 'система',
      'userInterface' => 'пользовательский интерфейс, тема, вкладки, логотип, панель управления',
      'authentication' => 'пароль, безопасность, ldap',
      'scheduledJob' => 'Планировщик заданий, задание выполняемое по расписанию',
      'integrations' => 'гугл, карты, гугл карты',
      'authLog' => 'Журнал истории',
      'authTokens' => 'Журнал истории доступа',
      'entityManager' => 'набор записей, отношения, связь',
      'templateManager' => 'уведомления',
      'jobs' => 'Планировщик заданий',
      'labelManager' => 'язык, перевод',
      'appSecrets' => 'key,keys,password',
      'leadCapture' => 'web forms'
    ],
    'options' => [
      'previewSize' => [
        '' => 'По умончанию',
        'x-small' => 'Очень маленький',
        'small' => 'Маленький',
        'medium' => 'Средний',
        'large' => 'Большой'
      ],
      'labelType' => [
        'state' => 'State',
        'regular' => 'Regular'
      ]
    ],
    'logicalOperators' => [
      'and' => 'И',
      'or' => 'ИЛИ',
      'not' => 'НЕ'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'Версия PHP',
      'requiredMysqlVersion' => 'Версия MySQL',
      'requiredMariadbVersion' => 'Версия MariaDB',
      'requiredPostgresqlVersion' => 'Версия PostgreSQL',
      'host' => 'Сервер',
      'dbname' => 'Имя БД',
      'user' => 'Имя пользователя',
      'writable' => 'С доступом записи',
      'readable' => 'С доступом чтения'
    ],
    'templates' => [
      'twoFactorCode' => 'Код 2FA',
      'accessInfo' => 'Реквизиты доступа',
      'accessInfoPortal' => 'Реквизиты доступа для порталов',
      'assignment' => 'Назначение',
      'mention' => 'Упоминание',
      'noteEmailReceived' => 'Заметка о полученном письме',
      'notePost' => 'Заметка о сообщении',
      'notePostNoParent' => 'Заметка о сообщении (без источника)',
      'noteStatus' => 'Заметка об обновлении статуса',
      'passwordChangeLink' => 'Ссылка для смены пароля',
      'invitation' => 'Приглашение',
      'cancellation' => 'Аннулирование',
      'reminder' => 'Напоминание'
    ],
    'tooltips' => [
      'tabUrl' => 'Can start with `#` to navigate to an application page.',
      'tabUrlAclScope' => 'The tab will be available for users who have access to the specified scope.'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Создать API пользователя'
    ]
  ],
  'AppLogRecord' => [
    'fields' => [
      'message' => 'Message',
      'code' => 'Code',
      'level' => 'Level',
      'exceptionClass' => 'Exception Class',
      'file' => 'File',
      'line' => 'Line',
      'requestMethod' => 'Request Method',
      'requestResourcePath' => 'Request Resource Path'
    ],
    'presetFilters' => [
      'errors' => 'Errors'
    ]
  ],
  'AppSecret' => [
    'labels' => [
      'Create AppSecret' => 'Create Secret'
    ],
    'fields' => [
      'value' => 'Value'
    ],
    'tooltips' => [
      'name' => 'Allowed characters:
* `[a-z]`
* `[A-Z]`
* `[0-9]`
* `_`'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Роль',
      'related' => 'Связанный',
      'file' => 'Файл',
      'type' => 'Тип',
      'field' => 'Поле',
      'sourceId' => 'ID Источника',
      'storage' => 'Хранилище',
      'size' => 'Размер (bytes)',
      'isBeingUploaded' => 'Загружается'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Вложение',
        'Inline Attachment' => 'Встроенное вложение',
        'Import File' => 'Импортировать файл',
        'Export File' => 'Эспортировать файл',
        'Mail Merge' => 'Слияние писем',
        'Mass Pdf' => 'Mass Pdf'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Вставить документ'
    ],
    'presetFilters' => [
      'orphan' => 'Сирота'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Имя пользователя',
      'ipAddress' => 'IP адрес',
      'requestTime' => 'Время запроса',
      'createdAt' => 'Запрос осуществлен с',
      'isDenied' => 'Отказано',
      'denialReason' => 'Причина отказа',
      'portal' => 'Портал',
      'user' => 'Пользователь',
      'authToken' => 'Токен аутентификации создан',
      'requestUrl' => 'URL запроса',
      'requestMethod' => 'Метод запроса',
      'authTokenIsActive' => 'Токен аутентификации активен',
      'authenticationMethod' => 'Метод аутентификации'
    ],
    'links' => [
      'authToken' => 'Токен аутентификации создан',
      'user' => 'Пользователь',
      'portal' => 'Портал',
      'actionHistoryRecords' => 'История действий'
    ],
    'presetFilters' => [
      'denied' => 'Отказано',
      'accepted' => 'Согласен'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Недопустимые учетные данные',
        'WRONG_CODE' => 'Wrong code',
        'INACTIVE_USER' => 'Неактивный пользователь',
        'IS_PORTAL_USER' => 'Пользователь портала',
        'IS_NOT_PORTAL_USER' => 'Не пользователь портала',
        'USER_IS_NOT_IN_PORTAL' => 'Пользователь не связан с порталом',
        'IS_SYSTEM_USER' => 'Is system user',
        'FORBIDDEN' => 'Forbidden'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Пользователь',
      'ipAddress' => 'IP адрес',
      'lastAccess' => 'Дата последнего подключения',
      'createdAt' => 'Дата входа',
      'isActive' => 'Активен',
      'portal' => 'Портал'
    ],
    'links' => [
      'actionHistoryRecords' => 'История действий'
    ],
    'presetFilters' => [
      'active' => 'Активный',
      'inactive' => 'Неактивный'
    ],
    'labels' => [
      'Set Inactive' => 'Селать неактивным'
    ],
    'massActions' => [
      'setInactive' => 'Селать неактивным'
    ]
  ],
  'AuthenticationProvider' => [
    'fields' => [
      'method' => 'Method'
    ],
    'labels' => [
      'Create AuthenticationProvider' => 'Создать поставщика'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'ОАЭ Дирхам',
      'AFN' => 'Афгани',
      'ALL' => 'Албанский лек',
      'AMD' => 'Армянский драм',
      'ANG' => 'Нидерландский антильский гульден',
      'AOA' => 'Ангольская кванза',
      'ARS' => 'Аргентинское песо',
      'AUD' => 'Австралийский доллар',
      'AWG' => 'Арубанский флорин',
      'AZN' => 'Азербайджанский манат',
      'BAM' => 'Конвертируемая марка Боснии и Герцеговины',
      'BBD' => 'Барбадосский доллар',
      'BDT' => 'Бангладешская така',
      'BGN' => 'Болгарский лев',
      'BHD' => 'Бахрейнский динар',
      'BIF' => 'Бурундийский франк',
      'BMD' => 'Бермудский доллар',
      'BND' => 'Брунейский доллар',
      'BOB' => 'Боливийский боливиано',
      'BOV' => 'Боливийский мвдол',
      'BRL' => 'Бразильский реал',
      'BSD' => 'Багамский доллар',
      'BTN' => 'Бутанский нгултрум',
      'BWP' => 'Ботсванская пула',
      'BYN' => 'Белорусский рубль',
      'BZD' => 'Белизский доллар',
      'CAD' => 'Канадский доллар',
      'CDF' => 'Конголезский франк',
      'CHE' => 'WIR Евро',
      'CHF' => 'Швейцарский франк',
      'CHW' => 'WIR Франк',
      'CLF' => 'Чилийская единица учета (UF)',
      'CLP' => 'Чилийское песо',
      'CNH' => 'Китайский юань (оффшор)',
      'CNY' => 'Китайский юань',
      'COP' => 'Колумбийское песо',
      'COU' => 'Колумбийская единица реальной стоимости',
      'CRC' => 'Костариканский колон',
      'CUC' => 'Кубинское конвертируемое песо',
      'CUP' => 'Кубинское песо',
      'CVE' => 'Эскудо Кабо-Верде',
      'CZK' => 'Чешская крона',
      'DJF' => 'Джибутийский франк',
      'DKK' => 'Датская крона',
      'DOP' => 'Доминиканское песо',
      'DZD' => 'Алжирский динар',
      'EGP' => 'Египетский фунт',
      'ERN' => 'Эритрейская накфа',
      'ETB' => 'Эфиопский быр',
      'EUR' => 'Евро',
      'FJD' => 'Фиджийский доллар',
      'FKP' => 'Фунт Фолклендских островов',
      'GBP' => 'Британский фунт',
      'GEL' => 'Грузинский лари',
      'GHS' => 'Ганский седи',
      'GIP' => 'Гибралтарский фунт',
      'GMD' => 'Гамбийский даласи',
      'GNF' => 'Гвинейский франк',
      'GTQ' => 'Гватемальский кетсаль',
      'GYD' => 'Гайанский доллар',
      'HKD' => 'Гонконгский доллар',
      'HNL' => 'Гондурасская лемпира',
      'HRK' => 'Хорватская куна',
      'HTG' => 'Гаитянский гурд',
      'HUF' => 'Венгерский форинт',
      'IDR' => 'Индонезийская рупия',
      'ILS' => 'Израильский Новый Шекель',
      'INR' => 'Индийская рупия',
      'IQD' => 'Иракский динар',
      'IRR' => 'Иранский риал',
      'ISK' => 'Исландская крона',
      'JMD' => 'Ямайский доллар',
      'JOD' => 'Иорданский динар',
      'JPY' => 'Японская иена',
      'KES' => 'Кенийский шиллинг',
      'KGS' => 'Киргизский сом',
      'KHR' => 'Камбоджийский риель',
      'KMF' => 'Коморский франк',
      'KPW' => 'Северокорейский вон',
      'KRW' => 'Южнокорейский вон',
      'KWD' => 'Кувейтский динар',
      'KYD' => 'Доллар Каймановых островов',
      'KZT' => 'Казахстанский тенге',
      'LAK' => 'Лаосский кип',
      'LBP' => 'Ливанский фунт',
      'LKR' => 'Шри-ланкийская рупия',
      'LRD' => 'Либерийский доллар',
      'LSL' => 'Лоти Лесото',
      'LYD' => 'Ливийский динар',
      'MAD' => 'Марокканский дирхам',
      'MDL' => 'Молдавский лей',
      'MGA' => 'Малагасийский ариари',
      'MKD' => 'Македонский динар',
      'MMK' => 'Мьянманский кьят',
      'MNT' => 'Монгольский тугрик',
      'MOP' => 'Патака Макао',
      'MRO' => 'Мавританская угия',
      'MUR' => 'Маврикийская рупия',
      'MWK' => 'Малавийская квача',
      'MXN' => 'Мексиканское песо',
      'MXV' => 'Мексиканская инвестиционная единица',
      'MYR' => 'Малайзийский ринггит',
      'MZN' => 'Мозамбикский метикал',
      'NAD' => 'Намибийский доллар',
      'NGN' => 'Нигерийская найра',
      'NIO' => 'Никарагуанская кордоба',
      'NOK' => 'Норвежская крона',
      'NPR' => 'Непальская рупия',
      'NZD' => 'Новозеландский доллар',
      'OMR' => 'Оманский риал',
      'PAB' => 'Панамский бальбоа',
      'PEN' => 'Перуанский соль',
      'PGK' => 'Кина Папуа-Новой Гвинеи',
      'PHP' => 'Филиппинское песо',
      'PKR' => 'Пакистанская рупия',
      'PLN' => 'Польский злотый',
      'PYG' => 'Парагвайский гуарани',
      'QAR' => 'Катарский риал',
      'RON' => 'Румынский лей',
      'RSD' => 'Сербский динар',
      'RUB' => 'Русский рубль',
      'RWF' => 'Руандийский франк',
      'SAR' => 'Саудовский риал',
      'SBD' => 'Доллар Соломоновых Островов',
      'SCR' => 'Сейшельская рупия',
      'SDG' => 'Суданский фунт',
      'SEK' => 'Шведская крона',
      'SGD' => 'Сингапурский доллар',
      'SHP' => 'Фунт Святой Елены',
      'SLL' => 'Леоне Сьерра-Леоне',
      'SOS' => 'Сомалийский шиллинг',
      'SRD' => 'Суринамский доллар',
      'SSP' => 'Южноcуданский aунт',
      'STN' => 'Добра Сан-Томе и Принсипи (2018)',
      'SYP' => 'Сирийский фунт',
      'SZL' => 'Свази Лилангени',
      'SVC' => 'Сальвадорский колон',
      'THB' => 'Тайский бат',
      'TJS' => 'Таджикский сомони',
      'TND' => 'Тунисский динар',
      'TOP' => 'Тонганская паанга',
      'TRY' => 'Турецкая лира',
      'TTD' => 'Доллар Тринидада и Тобаго',
      'TWD' => 'Новый тайваньский доллар',
      'TZS' => 'Танзанийский шиллинг',
      'UAH' => 'Украинская гривна',
      'UGX' => 'Угандийский шиллинг',
      'USD' => 'Доллар США',
      'USN' => 'Доллар США (Next day)',
      'UYI' => 'Уругвайское песо (индексированные единицы)',
      'UYU' => 'Уругвайское песо',
      'UZS' => 'Узбекский сум',
      'VEF' => 'Венесуэльский боливар',
      'VND' => 'Вьетнамский донг',
      'VUV' => 'Вануатский вату',
      'WST' => 'Самоанская тала',
      'XAF' => 'Центральноафриканский франк КФА',
      'XCD' => 'Восточно-карибский доллар',
      'XOF' => 'Западноафриканский франк КФА',
      'XPF' => 'Тихоокеанский франк (КФП)',
      'YER' => 'Йеменский риал',
      'ZAR' => 'Южноафриканский рэнд',
      'ZMW' => 'Замбийская квача',
      'ZWL' => 'Доллар Зимбабве'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Макет',
      'append' => 'Добавить (не удалять вкладки пользователя)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Создать шаблон',
      'Deploy to Users' => 'Применить для пользователей',
      'Deploy to Team' => 'Применить для группы'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Название',
      'dateFrom' => 'Дата от',
      'dateTo' => 'Дата по',
      'autorefreshInterval' => 'Интервал автообновления',
      'displayRecords' => 'Отображать записей',
      'isDoubleHeight' => 'Высота 2x',
      'mode' => 'Режим',
      'enabledScopeList' => 'Что отображать',
      'users' => 'Пользователи',
      'entityType' => 'Тип объекта',
      'primaryFilter' => 'Первичный фильтр',
      'boolFilterList' => 'Дополнительные фильтры',
      'sortBy' => 'Order By',
      'sortDirection' => 'Order Direction',
      'expandedLayout' => 'Макет',
      'skipOwn' => 'Не показывать собственные записи',
      'url' => 'URL',
      'dateFilter' => 'Фильтр даты',
      'text' => 'Текст',
      'folder' => 'Папка',
      'includeShared' => 'Include Shared',
      'team' => 'Команда',
      'futureDays' => 'Следующие X дней',
      'useLastStage' => 'Сгруппировать по последнем достигнутом этапе'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Неделя (расписание)',
        'basicWeek' => 'Неделя',
        'month' => 'Месяц',
        'basicDay' => 'День',
        'agendaDay' => 'День (повестка дня)',
        'timeline' => 'Расписание'
      ],
      'sortDirection' => [
        'asc' => 'Ascending',
        'desc' => 'Descending'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Выберите тип объекта в параметрах панели.'
    ],
    'tooltips' => [
      'skipOwn' => 'Действия, выполненные вашей учетной записью, отображаться не будут.'
    ],
    'otherFields' => [
      'soft' => 'Soft Color',
      'small' => 'Small Font'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Поле'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Равняется',
        'notEquals' => 'Не равняется',
        'greaterThan' => 'Больше чем',
        'lessThan' => 'Меньше чем',
        'greaterThanOrEquals' => 'Больше чем или равняется',
        'lessThanOrEquals' => 'Меньше чем или равняется',
        'in' => 'В',
        'notIn' => 'Не в',
        'inPast' => 'В Прошлом',
        'inFuture' => 'В Будущем',
        'isToday' => 'Сегодня',
        'isTrue' => 'Правда',
        'isFalse' => 'Неверно',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'contains' => 'Содержит',
        'notContains' => 'Не включает в себя',
        'has' => 'Содержит',
        'notHas' => 'Не включает в себя',
        'startsWith' => 'Начинается с',
        'endsWith' => 'Заканчивается',
        'matches' => 'Соответствия (регулярное выражение)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Тема',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateSent' => 'Дата отправки',
      'from' => 'От',
      'to' => 'Кому',
      'cc' => 'Копия (вторичные получатели письма)',
      'bcc' => 'Скрытая копия (скрытые получатели письма)',
      'replyTo' => 'Ответить',
      'replyToString' => 'Куда отвечать (строка)',
      'personStringData' => 'Данные личности в формате string',
      'isHtml' => 'HTML',
      'body' => 'Текст письма',
      'bodyPlain' => 'Текст письма (Простое)',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'selectTemplate' => 'Выбрать шаблон',
      'fromEmailAddress' => 'Адрес отправителя (ссылка)',
      'emailAddress' => 'Адрес эл. почты',
      'deliveryDate' => 'Дата доставки',
      'account' => 'Контрагент',
      'users' => 'Пользователи',
      'replied' => 'Ответили',
      'replies' => 'Ответы',
      'isRead' => 'Прочитано',
      'isNotRead' => 'Не прочитано',
      'isImportant' => 'Это важное',
      'isReplied' => 'Ответили',
      'isNotReplied' => 'Не ответили',
      'isUsers' => 'Пользовательский',
      'isUsersSent' => 'Is User\'s Sent',
      'inTrash' => 'В корзине',
      'inArchive' => 'In Archive',
      'folder' => 'Папка',
      'inboundEmails' => 'Учетные записи групп',
      'emailAccounts' => 'Личные учетные записи',
      'hasAttachment' => 'Имеет Вложения',
      'assignedUsers' => 'Ответственные',
      'sentBy' => 'Отправлено (кем)',
      'toEmailAddresses' => 'To Email Addresses',
      'ccEmailAddresses' => 'CC адрес эл. почты',
      'bccEmailAddresses' => 'BCC Email Addresses',
      'replyToEmailAddresses' => 'Reply-To Email Addresses',
      'messageId' => 'Идентификатор сообщения',
      'messageIdInternal' => 'Идентификатор сообщения (внутренний)',
      'folderId' => 'Идентификатор папки',
      'folderString' => 'Папка',
      'fromName' => 'Имя отправителя',
      'fromString' => 'Строка От',
      'fromAddress' => 'Адрес отправителя',
      'replyToName' => 'Имя для обратного адреса',
      'replyToAddress' => 'Обратный адрес',
      'isSystem' => 'Системный',
      'icsContents' => 'Содержание ICS',
      'icsEventData' => 'Данные о событиях ICS',
      'icsEventUid' => 'Идентификатор события СВК',
      'createdEvent' => 'Созданное событие',
      'event' => 'Событие',
      'icsEventDateStart' => 'Дата начала мероприятия ICS',
      'groupFolder' => 'Групповая папка',
      'groupStatusFolder' => 'Group Status Folder',
      'sendAt' => 'Send At',
      'isAutoReply' => 'Is Auto-Reply',
      'tasks' => 'Задачи'
    ],
    'links' => [
      'replied' => 'Ответили',
      'replies' => 'Ответы',
      'inboundEmails' => 'Учетные записи групп',
      'emailAccounts' => 'Личные учетные записи',
      'assignedUsers' => 'Ответственные',
      'sentBy' => 'Отправлено (кем)',
      'attachments' => 'Вложения',
      'fromEmailAddress' => 'Адрес эл. почты отправителя',
      'toEmailAddresses' => 'To Email Addresses',
      'ccEmailAddresses' => 'CC Email Addresses',
      'bccEmailAddresses' => 'BCC Email Addresses',
      'replyToEmailAddresses' => 'Reply-To Email Addresses',
      'createdEvent' => 'Created Event',
      'groupFolder' => 'Групповая папка'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Черновик',
        'Sending' => 'Отправляется',
        'Sent' => 'Отправлено',
        'Archived' => 'Imported',
        'Received' => 'Получено',
        'Failed' => 'Сбой'
      ],
      'groupStatusFolder' => [
        'Archive' => 'Archive',
        'Trash' => 'Trash'
      ]
    ],
    'labels' => [
      'Create Email' => 'Отправить эл. письмо в архив',
      'Archive Email' => 'Отправить эл. письмо в архив',
      'Import EML' => 'Import EML',
      'Compose' => 'Новое сообщение',
      'Reply' => 'Ответить',
      'Reply to All' => 'Ответить всем',
      'Forward' => 'Переслать',
      'Insert Field' => 'Вставить поле',
      'Original message' => 'Оригинальное сообщение',
      'Forwarded message' => 'Пересылаемое сообщение',
      'Email Accounts' => 'Учетные записи эл. почты пользователей',
      'Inbound Emails' => 'Учетные записи эл. почты групп',
      'Email Templates' => 'Шаблоны эл. писем',
      'Send Test Email' => 'Отправить тестовое эл. письмо',
      'Send' => 'Отправить',
      'Email Address' => 'Адрес эл. почты',
      'Mark Read' => 'Пометить как прочитанное',
      'Sending...' => 'Отправляется...',
      'Save Draft' => 'Сохранить черновик',
      'Mark all as read' => 'Пометить все как прочитанные',
      'Show Plain Text' => 'Показать обычный текст',
      'Mark as Important' => 'Пометить как важное',
      'Unmark Importance' => 'Снять пометку важности',
      'Move to Trash' => 'Переместить в корзину',
      'Retrieve from Trash' => 'Восстановить из корзины',
      'Move to Folder' => 'Переместить в папку',
      'Moved to Archive' => 'Moved to Archive',
      'No Records Moved' => 'No Records Moved',
      'Filters' => 'Фильтры',
      'Folders' => 'Папки',
      'Group Folders' => 'Групповые папки',
      'No Subject' => 'Без темы',
      'View Users' => 'Просмотреть пользователей',
      'Event' => 'Событие',
      'View Attachments' => 'View Attachments',
      'Moved to Trash' => 'Moved to Trash',
      'Retrieved from Trash' => 'Retrieved from Trash',
      'Schedule Send' => 'Schedule Send',
      'Create Lead' => 'Создать лида',
      'Create Contact' => 'Создать контакт',
      'Add to Contact' => 'Добавить в контакты',
      'Add to Lead' => 'Добавить в лиды',
      'Create Task' => 'Создать задачу',
      'Create Case' => 'Создать обращение'
    ],
    'strings' => [
      'sendingFailed' => 'Ошибка отправки электронной почты',
      'group' => 'Group'
    ],
    'messages' => [
      'confirmSend' => 'Отправить письмо?',
      'couldNotSentScheduledEmail' => 'Could not send scheduled [email]({link})',
      'notEditAccess' => 'No edit access to email.',
      'groupFolderNoAccess' => 'No access to group folder.',
      'groupMoveOutNoEditAccess' => 'Cannot move out from group folder. No edit access to email.',
      'groupMoveToNoEditAccess' => 'Cannot move to group folder. No edit access to email.',
      'groupMoveToTrashNoEditAccess' => 'Cannot move email from group folder to trash. No edit access to email.',
      'groupMoveToArchiveNoEditAccess' => 'Cannot move from group folder to Archive. No edit access to email.',
      'alreadyImported' => 'The [email]({link}) already exists in the system.',
      'invalidCredentials' => 'Invalid credentials.',
      'unknownError' => 'Unknown error.',
      'recipientAddressRejected' => 'Recipient address rejected.',
      'noSmtpSetup' => 'SMTP не настроен: {link}',
      'testEmailSent' => 'Тестовое эл. письмо было отправлено',
      'emailSent' => 'Эл. письмо было отправлено',
      'savedAsDraft' => 'Сохранено как черновик',
      'sendConfirm' => 'Отправить письмо?',
      'removeSelectedRecordsConfirmation' => 'Вы действительно хотите удалить выбранные электронные письма?

Они будут удалены и для других пользователей.',
      'removeRecordConfirmation' => 'Вы уверены, что хотите удалить письмо?

Он будет удален и для других пользователей.',
      'confirmInsertTemplate' => 'Текст эл. письма будет потерян. Вы действительно хотите вставить шаблон?'
    ],
    'presetFilters' => [
      'sent' => 'Отправленные',
      'archived' => 'Imported',
      'inbox' => 'Входящие',
      'drafts' => 'Черновики',
      'trash' => 'Корзина',
      'archive' => 'Archive',
      'important' => 'Важное'
    ],
    'actions' => [
      'moveToArchive' => 'Archive'
    ],
    'massActions' => [
      'markAsRead' => 'Пометить как прочитанное',
      'markAsNotRead' => 'Пометить как не прочитанное',
      'markAsImportant' => 'Пометить как важное',
      'markAsNotImportant' => 'Снять пометку важности',
      'moveToTrash' => 'Переместить в корзину',
      'moveToFolder' => 'Переместить в папку',
      'moveToArchive' => 'Archive',
      'retrieveFromTrash' => 'Восстановить из корзины'
    ],
    'otherFields' => [
      'file' => 'File'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Название',
      'status' => 'Статус',
      'host' => 'Сервер',
      'username' => 'Имя пользователя',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые папки',
      'security' => 'Безопасность',
      'fetchSince' => 'Получить эл. письма начиная с',
      'emailAddress' => 'Адрес эл. почты',
      'sentFolder' => 'Папка \'Отправленные\'',
      'storeSentEmails' => 'Сохранять отправленные эл. письма',
      'keepFetchedEmailsUnread' => 'Оставлять полученные эл. письма непрочитанными',
      'emailFolder' => 'Положить в папку',
      'connectedAt' => 'Connected At',
      'useImap' => 'Получать эл. письма',
      'useSmtp' => 'Использовать SMTP',
      'smtpHost' => 'SMTP Хост',
      'smtpPort' => 'SMTP Порт',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Безопасность',
      'smtpAuthMechanism' => 'Механизм аутентификации SMTP',
      'smtpUsername' => 'SMTP Имя пользователя',
      'smtpPassword' => 'SMTP Пароль'
    ],
    'links' => [
      'filters' => 'Фильтры',
      'emails' => 'Эл. письма'
    ],
    'options' => [
      'status' => [
        'Active' => 'Активная',
        'Inactive' => 'Неактивная'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN расширение файла',
        'login' => 'Логин',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Создать учетную запись эл. почты',
      'IMAP' => 'IMAP- почтовый протокол',
      'Main' => 'Основное',
      'Test Connection' => 'Проверка соединения',
      'Send Test Email' => 'Отправить тестовое эл. письмо',
      'SMTP' => 'SMTP'
    ],
    'presetFilters' => [
      'active' => 'Active'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Не удалось соединиться с IMAP сервером',
      'connectionIsOk' => 'Соединение с IMAP сервером прошло удачно',
      'imapNotConnected' => 'Could not connect to [IMAP account](#EmailAccount/view/{id}).'
    ],
    'tooltips' => [
      'useSmtp' => 'Возможность отправлять электронные письма.',
      'emailAddress' => 'У записи пользователя (назначенного пользователя) должен быть тот же адрес электронной почты, чтобы иметь возможность использовать эту учетную запись электронной почты для отправки',
      'monitoredFolders' => 'Несколько папок следует разделять запятыми.

Вы можете добавить папку «Отправленные» для синхронизации писем, отправленных из внешнего почтового клиента. ',
      'storeSentEmails' => 'Отправленные эл. письма будут храниться на IMAP сервере. Адрес эл. почты должен соответствовать адресу с которого производится отправка.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Основной',
      'Opted Out' => 'Отписан',
      'Invalid' => 'Неверный адрес'
    ],
    'fields' => [
      'optOut' => 'Отписан',
      'invalid' => 'Неверный адрес',
      'lower' => 'Lower-case Name'
    ],
    'presetFilters' => [
      'orphan' => 'Сирота'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'От',
      'to' => 'Кому',
      'subject' => 'Тема',
      'bodyContains' => 'Текст письма содержит',
      'bodyContainsAll' => 'Тело содержит все',
      'action' => 'Действие',
      'isGlobal' => 'Глобальный',
      'emailFolder' => 'Папка',
      'groupEmailFolder' => 'Папка групповой эл. почты',
      'markAsRead' => 'Отметить как прочитанное',
      'skipNotification' => 'Skip Notification'
    ],
    'links' => [
      'emailFolder' => 'Папка',
      'groupEmailFolder' => 'Папка групповой эл. почты'
    ],
    'labels' => [
      'Create EmailFilter' => 'Создать фильтр эл. почты',
      'Emails' => 'Эл. письма'
    ],
    'options' => [
      'action' => [
        'None' => 'Нет',
        'Skip' => 'Пропускать',
        'Move to Folder' => 'Положить в папку',
        'Move to Group Folder' => 'Положить в групповую папку'
      ]
    ],
    'tooltips' => [
      'name' => 'Просто название фильтра.',
      'subject' => 'Используйте подстановочный знак *
  *  -  `текст *`    - начинается с текста,
  *  -  `* текст *` - содержит текст,
  *  - `* текст`     - оканчивается текстом. ',
      'bodyContains' => 'Тело эл. письма содержит любое из указанных слов или фраз.',
      'bodyContainsAll' => 'Тело письма содержит все указанные слова или фразы.',
      'from' => 'Письма отправленные с указанного адреса. Оставьте пустым, если не требуется. Можете использовать специальный символ *.',
      'to' => 'Письма отправленные на указанный адрес. Оставьте пустым, если не требуется. Можете использовать специальный символ *.',
      'isGlobal' => 'Этот фильтр применяется для всех электронных писем, поступающих в систему.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Пропустить оповещения'
    ],
    'labels' => [
      'Create EmailFolder' => 'Создать папку',
      'Manage Folders' => 'Управление папками',
      'Emails' => 'Эл. письма'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Название',
      'status' => 'Статус',
      'isHtml' => 'HTML',
      'body' => 'Текст письма',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'oneOff' => 'Одноразовый',
      'category' => 'Категория',
      'insertField' => 'Заполнители'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Создать шаблон эл. письма',
      'Info' => 'Информация',
      'Available placeholders' => 'Доступные заполнители'
    ],
    'options' => [
      'status' => [
        'Active' => 'Active',
        'Inactive' => 'Inactive'
      ]
    ],
    'messages' => [
      'infoText' => 'Доступные заполнители:

{optOutUrl} &#8211; URL (указатель ресурса/ путь) для ссылки на отказ от подписки;

{optOutLink} &#8211; ссылка для отказа от подписки.'
    ],
    'tooltips' => [
      'oneOff' => 'Отметьте если собираетесь использовать этот шаблон только один раз. К примеру для массовой рассылки эл. писем.'
    ],
    'presetFilters' => [
      'actual' => 'Актуальный'
    ],
    'placeholderTexts' => [
      'today' => 'Сегодняшняя дата',
      'now' => 'Текущая дата и время',
      'currentYear' => 'Текущий год',
      'optOutUrl' => 'URL-адрес ссылки для отказа от подписки',
      'optOutLink' => 'ссылка для отмены подписки'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Создать категорию',
      'Manage Categories' => 'Управление категориями',
      'EmailTemplates' => 'Шаблоны эл. писем'
    ],
    'fields' => [
      'order' => 'Порядок',
      'childList' => 'Child List'
    ],
    'links' => [
      'emailTemplates' => 'Шаблоны эл. писем'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Поля',
      'Relationships' => 'Отношения',
      'Layouts' => 'Макеты',
      'Schedule' => 'График',
      'Log' => 'Лог',
      'Formula' => 'Формула',
      'Parameters' => 'Parameters'
    ],
    'fields' => [
      'name' => 'Название',
      'type' => 'Тип',
      'labelSingular' => 'Метка (единственное число)',
      'labelPlural' => 'Метка (множественное число)',
      'stream' => 'Лента',
      'label' => 'Метка',
      'linkType' => 'Тип ссылки',
      'entity' => 'Сущность',
      'entityForeign' => 'Внешний объект',
      'linkForeign' => 'Внешняя связь',
      'link' => 'Ссылка',
      'labelForeign' => 'Внешняя метка',
      'sortBy' => 'Default Order Field',
      'sortDirection' => 'Default Order Direction',
      'relationName' => 'Middle Table Name',
      'linkMultipleField' => 'Поле связь (Многие)',
      'linkMultipleFieldForeign' => 'Поле внешняя связь (Многие)',
      'disabled' => 'Отключено',
      'textFilterFields' => 'Поля текстовых фильтров',
      'audited' => 'Проверено',
      'auditedForeign' => 'Внешний аудит',
      'statusField' => 'Поле статуса',
      'beforeSaveCustomScript' => 'Перед сохранением пользовательского сценария',
      'beforeSaveApiScript' => 'API перед сохранением сценария',
      'color' => 'Цвет',
      'kanbanViewMode' => 'Просмотр Канбан ',
      'kanbanStatusIgnoreList' => 'Группы, которые не могут просматривать Канбан',
      'iconClass' => 'Значок',
      'countDisabled' => 'Отключить счетчик записей',
      'fullTextSearch' => 'Полнотекстовый поиск',
      'parentEntityTypeList' => 'Тип объекта источника',
      'foreignLinkEntityTypeList' => 'Внешние связи',
      'optimisticConcurrencyControl' => 'Оптимистическое управление параллелизмом',
      'preserveAuditLog' => 'Preserve Audit Log',
      'updateDuplicateCheck' => 'Проверка дубликатов при обновлении',
      'duplicateCheckFieldList' => 'Дублирование полей проверки',
      'stars' => 'Stars',
      'layout' => 'Макет',
      'selectFilter' => 'Select Filter',
      'author' => 'Автор',
      'module' => 'Модуль',
      'version' => 'Версия',
      'primaryFilters' => 'Primary Filters',
      'assignedUsers' => 'Multiple Assigned Users',
      'collaborators' => 'Collaborators',
      'aclContactLink' => 'ACL Contact Link',
      'aclAccountLink' => 'ACL Account Link',
      'activityStatusList' => 'Статусы деятельности',
      'historyStatusList' => 'Исторические статусы',
      'completedStatusList' => 'Завершенные статусы',
      'canceledStatusList' => 'Отмененные статусы'
    ],
    'options' => [
      'type' => [
        '' => 'Нет',
        'Base' => 'База',
        'Person' => 'Личность',
        'CategoryTree' => 'Дерево категорий',
        'Event' => 'Событие',
        'BasePlus' => 'Base Plus',
        'Company' => 'Компания'
      ],
      'linkType' => [
        'manyToMany' => 'Многие-ко-многим',
        'oneToMany' => 'Один-ко-многим',
        'manyToOne' => 'Много-к-одному',
        'oneToOneRight' => 'Один-к-одному правое',
        'oneToOneLeft' => 'Один-к-одному левое',
        'parentToChildren' => 'От отца к сыну',
        'childrenToParent' => 'От сына к отцу'
      ],
      'sortDirection' => [
        'asc' => 'По возрастанию',
        'desc' => 'По убыванию'
      ],
      'module' => [
        'Custom' => 'Custom'
      ]
    ],
    'messages' => [
      'urlHashCopiedToClipboard' => 'A URL fragment for the *{name}* filter is copied to the clipboard. You can add it to the navbar.',
      'confirmRemoveLink' => 'Are you sure you want to remove the *{link}* relationship?',
      'nameIsAlreadyUsed' => 'Имя \'{name}\' уже используется.',
      'nameIsNotAllowed' => 'Имя \'{name}\' недопустимо.',
      'nameIsTooLong' => 'Название слишком длинное.',
      'confirmRemove' => 'Вы уверены, что хотите удалить тип объекта (сущности) из системы?',
      'entityCreated' => 'Объект был создан',
      'linkAlreadyExists' => 'Конфликт названий связей (link).',
      'linkConflict' => 'Связь (link) с таким названием уже существует.',
      'beforeSaveCustomScript' => 'Сценарий, вызываемый каждый раз перед сохранением сущности. Используется для установки вычисляемых полей.',
      'beforeSaveApiScript' => 'Сценарий, вызываемый при запросах API на создание и обновление перед сохранением сущности. Используется для пользовательской валидации и проверки дубликатов.'
    ],
    'tooltips' => [
      'aclContactLink' => 'The link with Contact to use when applying access control for portal users.',
      'aclAccountLink' => 'The link with Account to use when applying access control for portal users.',
      'collaborators' => 'The ability to share records with specific users.',
      'assignedUsers' => 'The ability to assign multiple users to a record.

Note that after enabling the parameter, existing assigned users won\'t be transferred to the new *Assigned Users* field.',
      'duplicateCheckFieldList' => 'Какие поля проверять при выполнении проверки на наличие дубликатов.',
      'updateDuplicateCheck' => 'Выполните проверку на наличие дубликатов при обновлении записи.',
      'optimisticConcurrencyControl' => 'Предотвращает конфликты при написании.',
      'preserveAuditLog' => 'Disables cleanup of the audit log. This parameter is applicable only if Stream is disabled. As if Stream is enabled, audit log records are not being deleted.',
      'stars' => 'The ability to star records. Stars can be used by users to bookmark records.',
      'statusField' => 'Обновления этого поля записываются в ленту.',
      'textFilterFields' => 'Поля, используемые для текстового поиска.',
      'stream' => 'Whether the entity has the Stream.',
      'disabled' => 'Отметьте, если вам не нужна эта сущность в вашей системе.',
      'linkAudited' => 'Создание связанной записи и привязка к существующей записи будет регистрироваться в Ленте.',
      'linkMultipleField' => 'Поле связь (Многие) предоставляет удобный способ редактирования отношений. Не используйте его, если у вас может быть большое количество связанных записей.',
      'linkSelectFilter' => 'A primary filter to apply by default when selecting a record.',
      'entityType' => 'Base Plus - имеет панели «Действия», «История» и «Задачи».

Событие - доступно в панели Календарь и Действия. ',
      'countDisabled' => 'Общее количество не будет отображаться в виде списке. Может уменьшить время загрузки, когда таблица БД велика.',
      'fullTextSearch' => 'Требуется выполнить перестройку.',
      'linkParamReadOnly' => 'A read-only link cannot be edited via the *link* and *unlink* API requests. It won\'t be possible to relate and unrelate records via the relationship panel. It still possible to edit read-only links via link and link-multiple fields.',
      'activityStatusList' => 'Значения статуса, определяющие, что запись о деятельности должна отображаться на панели "Деятельность" и считаться актуальной.',
      'historyStatusList' => 'Значения статуса, определяющие отображение записи о деятельности на панели истории.',
      'completedStatusList' => 'Значения статуса, определяющие, что деятельность завершена.',
      'canceledStatusList' => 'Значения статуса, определяющие, что деятельность отменена и не будет учитываться в диапазонах "свободен/занят".'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Экспортировать все поля',
      'fieldList' => 'Список полей',
      'format' => 'Формат',
      'status' => 'Статус',
      'xlsxLite' => 'Лайт',
      'xlsxRecordLinks' => 'Ссылки на записи',
      'xlsxTitle' => 'Название'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV-файл текстового формата',
        'xlsx' => 'XLSX (Excel)- формат Эксель'
      ],
      'status' => [
        'Pending' => 'В ожидании',
        'Running' => 'Работает',
        'Success' => 'Успех',
        'Failed' => 'Не удалось'
      ]
    ],
    'tooltips' => [
      'xlsxLite' => 'Потребляет гораздо меньше памяти. Рекомендуется, если экспортируется большое количество записей.',
      'xlsxTitle' => 'Печатать название и текущую дату в заголовке.'
    ],
    'messages' => [
      'exportProcessed' => 'Экспорт был обработан. Скачайте [файл]({url}).',
      'infoText' => 'Экспорт обрабатывается в режиме ожидания с помощью cron. Его завершение может занять некоторое время. Закрытие этого модального диалога не повлияет на процесс выполнения.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Название',
      'version' => 'Версия',
      'description' => 'Описание',
      'isInstalled' => 'Установлено',
      'checkVersionUrl' => 'URL для проверки наличия новых версий'
    ],
    'labels' => [
      'Uninstall' => 'Удалить',
      'Install' => 'Установить'
    ],
    'messages' => [
      'uninstalled' => 'Расширение {name} было удалено',
      'fileExceedsMaxUploadSize' => 'The file size exceeds the max upload size {maxSize}. Consider increasing `post_max_size` or install the extension via CLI.'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Подключить',
      'Disconnect' => 'Отключить',
      'Disconnected' => 'Отключено',
      'Connected' => 'Подключено'
    ],
    'help' => [],
    'messages' => [
      'externalAccountNoConnectDisabled' => 'External account for integration \'{integration}\' has been disabled due not being able to connect.'
    ]
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Логичность динамики',
      'Name' => 'название',
      'Label' => 'Метка',
      'Type' => 'Тип',
      'View Details' => 'View Details'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'Нет',
        'javascript: return this.dateTime.getNow(1);' => 'Сейчас',
        'javascript: return this.dateTime.getNow(5);' => 'Теперь (5 мин)',
        'javascript: return this.dateTime.getNow(15);' => 'Теперь (15 мин)',
        'javascript: return this.dateTime.getNow(30);' => 'Теперь (30 мин)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 час',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 часа',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 часа',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 часа',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 часов',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 часов',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 часов',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 часов',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 часов',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 часов',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 часов',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 часов',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 день',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 дня',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 дня',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 дня',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 дней',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 дней',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 неделя'
      ],
      'dateDefault' => [
        '' => 'Нет',
        'javascript: return this.dateTime.getToday();' => 'Сегодня',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 день',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 дня',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 дня',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 дня',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 дней',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 дней',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 дней',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 дней',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 дней',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 дней',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 неделя',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 недели',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 недели',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 месяц',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 месяца',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 месяца',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 месяца',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 месяцев',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 месяцев',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 месяцев',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 месяцев',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 месяцев',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 месяцев',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 месяцев',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 год'
      ],
      'barcodeType' => [
        'EAN13' => 'европейский стандарт штрихкода (EAN-13)',
        'EAN8' => 'европейский стандарт штрихкода (EAN-8)',
        'EAN5' => 'европейский стандарт штрихкода (EAN-5)',
        'EAN2' => 'европейский стандарт штрихкода (EAN-2)',
        'UPC' => 'Американский стандарт штрихкода (UPC (A))',
        'UPCE' => 'Американский стандарт штрихкода (UPC (E))',
        'pharmacode' => 'Фармацевтический двоичный код',
        'QRcode' => 'QR код'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Запрещено',
        'internal' => 'Внутренний',
        'onlyAdmin' => 'Только для администраторов',
        'readOnly' => 'Только для чтения',
        'nonAdminReadOnly' => 'Только для чтения не администратором'
      ]
    ],
    'tooltips' => [
      'optionsReference' => 'Повторное использование вариантов из другой области.',
      'currencyDecimal' => 'Используйте тип Decimal DB. В приложении значения будут представлены в виде строк. Отметьте этот параметр, если требуется точность.',
      'cutHeight' => 'Текст, превышающий заданное значение, будет вырезан с отображением кнопки "Показать больше".',
      'urlStrip' => 'Зачеркните протокол и косую черту.',
      'audited' => 'Обновления будут регистрироваться в ленте.',
      'required' => 'Поле будет обязательным. Не может быть пустым.',
      'default' => 'Значение будет установлено по умолчанию при создании.',
      'min' => 'Минимально допустимое значение.',
      'max' => 'Максимально допустимое значение.',
      'seeMoreDisabled' => 'Если не отмечено, то длинные тексты будут сокращены.',
      'lengthOfCut' => 'Насколько долгим может быть текст, прежде чем он будет сокращен.',
      'maxLength' => 'Максимально допустимая длина текста.',
      'before' => 'Значение даты должно быть перед значением даты в указанном поле.',
      'after' => 'Значение даты должно быть после значения даты в указанном поле.',
      'readOnly' => 'Значение поля не может быть задано пользователем. Но может быть рассчитано по формуле.',
      'readOnlyAfterCreate' => 'The field value can be specified when creating a new record. After that, the field becomes read-only. It can still be calculated by formula.',
      'preview' => 'Show the preview button. Applicable if Markdown is enabled.',
      'fileAccept' => 'Какие типы файлов принимать. Можно добавлять пользовательские элементы.',
      'barcodeLastChar' => 'Для типа EAN-13.',
      'maxFileSize' => 'Если пустой или 0, то неограниченный',
      'conversionDisabled' => 'Действие конвертации валюты не будет применяться к этому полю.',
      'pattern' => 'Регулярное выражение для проверки значения поля. Определите выражение или выберите предопределенное.',
      'options' => 'Список возможных значений и их меток.',
      'itemsEditable' => 'Items can be edited. Applicable only if no options are specified.',
      'optionsArray' => 'Список возможных значений и их обозначений. Если поле пустое, в него можно ввести пользовательские значения.',
      'maxCount' => 'Максимальное количество элементов, разрешенных для выбора.',
      'displayAsList' => 'Каждый элемент в новой строке.',
      'optionsVarchar' => 'Список значений автозаполнения.',
      'linkReadOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.

It will also disable the ability to create a related record from relationship panels.',
      'relateOnImport' => 'When importing with this field, it will automatically relate a record with a matching foreign record. Use this functionality only if the foreign field is considered as unique.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Улица',
        'city' => 'Город',
        'state' => 'Регион',
        'country' => 'Страна',
        'postalCode' => 'Почтовый индекс',
        'map' => 'Карта'
      ],
      'personName' => [
        'salutation' => 'Обращение',
        'first' => 'Имя',
        'middle' => 'Отчество',
        'last' => 'Фамилия'
      ],
      'currency' => [
        'converted' => '(Сконвертированная)',
        'currency' => '(Валюта)'
      ],
      'datetimeOptional' => [
        'date' => 'Дата'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'Однострочный текст.',
      'enum' => 'Поле выбора, можно выбрать только одно значение.',
      'text' => 'Многострочный текст с поддержкой разметки.',
      'date' => 'Дата без времени.',
      'datetime' => 'Дата и время',
      'currency' => 'Значение валюты. Плавающее число с кодом валюты.',
      'int' => 'Целое число.',
      'float' => 'Число с десятичной частью.',
      'bool' => 'Флажок. Два возможных значения: истина и ложь.',
      'multiEnum' => 'Список значений, можно выбрать несколько значений. Список упорядочен.',
      'checklist' => 'Список флажков.',
      'array' => 'Список значений, аналогичный полю мульти-перечислений',
      'address' => 'Адрес с улицей, городом, областью, почтовым индексом и страной.',
      'url' => 'Для хранения ссылок',
      'urlMultiple' => 'Многочисленные ссылки.',
      'wysiwyg' => 'Текст с поддержкой HTML.',
      'file' => 'Для загрузки файлов.',
      'image' => 'Для загрузки изображений.',
      'attachmentMultiple' => 'Позволяет загружать несколько файлов.',
      'number' => 'Автоматически увеличивающееся число строкового типа с возможным префиксом и определенной длиной.',
      'autoincrement' => 'Сгенерированное автоматически увеличивающееся целое число только для чтения.',
      'barcode' => 'Штрих-код. Может быть распечатан в формате PDF.',
      'email' => 'Набор адресов электронной почты с их параметрами: Отказ, Недействительно, Главный.',
      'phone' => 'Набор телефонных номеров с их параметрами: Тип, Не активен, Недействительный, Основной.',
      'foreign' => 'Поле связанной записи. Только для чтения.',
      'link' => 'Запись, связанная через отношение Принадлежит (многие-к-одному или один-к-одному).',
      'linkParent' => 'Запись, связанная через отношение "Принадлежит родителю". Может быть разных типов сущностей.',
      'linkMultiple' => 'Набор записей, связанных через отношения Has-Many (много-ко-многим или один-ко-многим). Не все отношения имеют поля с типом Link-Multiple. Только те, в которых включен параметр(ы) Link-Multiple.'
    ],
    'messages' => [
      'fieldCreatedAddToLayouts' => 'Field has been created. Now, you can add it to [layouts]({link})',
      'confirmRemove' => 'Are you sure you want to remove the *{field}* field?

Field removal does not remove data from the database. Data from the database will be removed if you run hard rebuild.',
      'fieldNameIsNotAllowed' => 'Имя поля \'{field}\' недопустимо.',
      'fieldAlreadyExists' => 'Поле \'{field}\' уже существует в \'{entityType}\'.',
      'linkWithSameNameAlreadyExists' => 'Ссылка с именем \'{field}\' уже существует в \'{entityType}\'.',
      'namingFieldLinkConflict' => 'Name \'{field}\' conflicts with link.'
    ],
    'otherFields' => [
      'attributes' => 'Attributes'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Проверка синтаксиса',
      'Run' => 'Запустить'
    ],
    'fields' => [
      'target' => 'Цель',
      'targetType' => 'Тип цели',
      'script' => 'Сценарий',
      'output' => 'Выход',
      'error' => 'Ошибка'
    ],
    'messages' => [
      'runSuccess' => 'Выполнено успешно.',
      'runError' => 'Ошибка.',
      'checkSyntaxSuccess' => 'Синтаксис правильный.',
      'checkSyntaxError' => 'Синтаксическая ошибка.',
      'emptyScript' => 'Сценарий пуст.'
    ],
    'tooltips' => [
      'output' => 'Выведите значения с помощью функции `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Заметка',
      'Email' => 'Эл. письмо',
      'User' => 'Пользователь',
      'Team' => 'Группа',
      'Role' => 'Роль',
      'EmailTemplate' => 'Шаблон эл. письма',
      'EmailTemplateCategory' => 'Категории шаблонов эл. писем',
      'EmailAccount' => 'Учетная запись эл. почты пользователя',
      'EmailAccountScope' => 'Учетная запись эл. почты пользователя',
      'OutboundEmail' => 'Исходящее эл. письмо',
      'ScheduledJob' => 'Задание планировщика',
      'ExternalAccount' => 'Внешняя учетная запись',
      'Extension' => 'Расширение',
      'Dashboard' => 'Панель виджетов',
      'InboundEmail' => 'Учетная запись эл. почты группы',
      'Stream' => 'Лента',
      'Import' => 'Импортировать',
      'ImportError' => 'Ошибка импорта',
      'Template' => 'Шаблон',
      'Job' => 'Задание',
      'EmailFilter' => 'Фильтр эл. почты',
      'Portal' => 'Портал',
      'PortalRole' => 'Роли портала',
      'Attachment' => 'Вложение',
      'EmailFolder' => 'Папка с эл. письмами',
      'GroupEmailFolder' => 'Папка групповой эл. почты',
      'PortalUser' => 'Пользователь портала',
      'ApiUser' => 'API пользователь',
      'ScheduledJobLogRecord' => 'Запись журнала запланированных работ',
      'PasswordChangeRequest' => 'Запрос на изменение пароля',
      'ActionHistoryRecord' => 'Запись истории действий',
      'AuthToken' => 'Токен аутентификации',
      'UniqueId' => 'Уникальный ID',
      'LastViewed' => 'Последние просмотренные',
      'Settings' => 'Настройки',
      'FieldManager' => 'Управление полями',
      'Integration' => 'Интеграция',
      'LayoutManager' => 'Управление макетами',
      'EntityManager' => 'Управление объектами',
      'Export' => 'Экспорт',
      'DynamicLogic' => 'Динамическая логика',
      'DashletOptions' => 'Настройки панели',
      'Admin' => 'Админ',
      'Global' => 'Глобальный',
      'Preferences' => 'Персональные Настройки',
      'EmailAddress' => 'Адрес эл. почты',
      'PhoneNumber' => 'Номер телефона',
      'AppLogRecord' => 'App Log Record',
      'AuthLogRecord' => 'Запись журнала Аутентификации',
      'AuthFailLogRecord' => 'Запись Сбоя журнала Аутентификации',
      'LeadCapture' => 'Точка входа захвата кандидата',
      'LeadCaptureLogRecord' => 'Запись лога захвата кандидата',
      'ArrayValue' => 'Значение массива',
      'DashboardTemplate' => 'Шаблон панели виджетов',
      'Currency' => 'Валюта',
      'LayoutSet' => 'Набор макетов',
      'Webhook' => 'Вебхук',
      'WebhookQueueItem' => 'Webhook Queue Item',
      'WebhookEventQueueItem' => 'Webhook Event Queue Item',
      'Mass Action' => 'Массовое действие',
      'WorkingTimeCalendar' => 'Календарь рабочего времени',
      'WorkingTimeRange' => 'Working Time Exception',
      'AuthenticationProvider' => 'Поставщик аутентификации',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Country',
      'AppSecret' => 'App Secret',
      'OAuthProvider' => 'OAuth Provider',
      'OAuthAccount' => 'OAuth Account',
      'Account' => 'Контрагент',
      'Contact' => 'Контакт',
      'Lead' => 'Кандидат',
      'Target' => 'Цель',
      'Opportunity' => 'Cделка',
      'Meeting' => 'Встреча',
      'Calendar' => 'Календарь',
      'Call' => 'Звонок',
      'Task' => 'Задача',
      'Case' => 'Обращение',
      'Document' => 'Документ',
      'DocumentFolder' => 'Папка с документами',
      'Campaign' => 'Кампания',
      'TargetList' => 'Список целей',
      'MassEmail' => 'Массовая рассылка эл. писем',
      'EmailQueueItem' => 'Элемент очереди эл. почты',
      'CampaignTrackingUrl' => 'Целевой URL-адрес',
      'Activities' => 'Деятельность',
      'KnowledgeBaseArticle' => 'Статья базы знаний',
      'KnowledgeBaseCategory' => 'Категория базы знаний',
      'CampaignLogRecord' => 'Запись журнала Кампании',
      'TargetListCategory' => 'Target List Category'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Заметки',
      'Email' => 'Эл. письма',
      'User' => 'Пользователи',
      'Team' => 'Группы',
      'Role' => 'Роли',
      'EmailTemplate' => 'Шаблоны эл. писем',
      'EmailTemplateCategory' => 'Категории шаблонов эл. писем',
      'EmailAccount' => 'Учетные записи эл. почты пользователей',
      'EmailAccountScope' => 'Учетные записи эл. почты пользователей',
      'OutboundEmail' => 'Исходящие эл. письма',
      'ScheduledJob' => 'Задания планировщика',
      'ExternalAccount' => 'Внешние учетные записи',
      'Extension' => 'Расширения',
      'Dashboard' => 'Панели виджетов',
      'InboundEmail' => 'Учетные записи эл. почты групп',
      'EmailAddress' => 'Адреса эл. почты',
      'PhoneNumber' => 'Телефонные номера',
      'Stream' => 'Ленты',
      'Import' => 'Импорт',
      'ImportError' => 'Ошибки импорта',
      'Template' => 'Шаблоны',
      'Job' => 'Задания',
      'EmailFilter' => 'Фильтры эл. почты',
      'Portal' => 'Порталы',
      'PortalRole' => 'Роли порталов',
      'Attachment' => 'Вложения',
      'EmailFolder' => 'Папки Эл.почты',
      'GroupEmailFolder' => 'Групповые папки эл. почты',
      'PortalUser' => 'Пользователи портала',
      'ApiUser' => 'API пользователи',
      'ScheduledJobLogRecord' => 'Записи журнала запланированных работ',
      'PasswordChangeRequest' => 'Запросы смены пароля',
      'ActionHistoryRecord' => 'История действий',
      'AuthToken' => 'Токены сессий аутентификации',
      'UniqueId' => 'Уникальные IDs',
      'LastViewed' => 'Последние просмотренные',
      'AppLogRecord' => 'App Log',
      'AuthLogRecord' => 'Журнал Аутентификации',
      'AuthFailLogRecord' => 'Сбой журнал Аутентификации',
      'LeadCapture' => 'Захват кандидата',
      'LeadCaptureLogRecord' => 'Журнал захвата кандидата',
      'ArrayValue' => 'Значения массива',
      'DashboardTemplate' => 'Шаблоны панели виджетов',
      'Currency' => 'Валюта',
      'LayoutSet' => 'Наборы макетов',
      'Webhook' => 'Вебхуки',
      'WebhookQueueItem' => 'Webhook Queue Items',
      'WebhookEventQueueItem' => 'Webhook Event Queue Items',
      'WorkingTimeCalendar' => 'Календари рабочего времени',
      'WorkingTimeRange' => 'Working Time Exceptions',
      'AuthenticationProvider' => 'Поставщики аутентификации',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Countries',
      'AppSecret' => 'App Secrets',
      'OAuthProvider' => 'OAuth Providers',
      'OAuthAccount' => 'OAuth Accounts',
      'Account' => 'Контрагенты',
      'Contact' => 'Контакты',
      'Lead' => 'Лиды',
      'Target' => 'Цели',
      'Opportunity' => 'Сделки',
      'Meeting' => 'Встречи',
      'Calendar' => 'Календари',
      'Call' => 'Звонки',
      'Task' => 'Задачи',
      'Case' => 'Обращения',
      'Document' => 'Документы',
      'DocumentFolder' => 'Папки с документами',
      'Campaign' => 'Кампании',
      'TargetList' => 'Списки целей',
      'MassEmail' => 'Массовые рассылки эл. писем',
      'EmailQueueItem' => 'Элементы очереди эл. почты',
      'CampaignTrackingUrl' => 'Целевые URL-адреса',
      'Activities' => 'Деятельность',
      'KnowledgeBaseArticle' => 'Статьи базы знаний',
      'KnowledgeBaseCategory' => 'Категории базы знаний',
      'CampaignLogRecord' => 'Записи журнала Кампании',
      'TargetListCategory' => 'Target List Categories'
    ],
    'labels' => [
      'Previous Page' => 'Previous Page',
      'Next Page' => 'Next Page',
      'First Page' => 'First Page',
      'Last Page' => 'Last Page',
      'Page' => 'Page',
      'Sort' => 'Сортировать',
      'Column Resize' => 'Column Resize',
      'Misc' => 'Разное',
      'General' => 'General',
      'Merge' => 'Объединить',
      'None' => 'Нет',
      'Home' => 'Главная',
      'by' => 'по (от)',
      'Proceed' => 'Продолжить',
      'Saved' => 'Сохранено',
      'Error' => 'Ошибка',
      'Select' => 'Выбрать',
      'Not valid' => 'Некорректные данные',
      'Please wait...' => 'Пожалуйста, подождите...',
      'Please wait' => 'Пожалуйста, подождите',
      'Attached' => 'Прилагается',
      'Loading...' => 'Загрузка...',
      'Uploading...' => 'Загружается...',
      'Sending...' => 'Отправляется...',
      'Send' => 'Send',
      'Merged' => 'Объединено',
      'Removed' => 'Удалено',
      'Posted' => 'Добавлено',
      'Linked' => 'Ссылка добавлена',
      'Unlinked' => 'Ссылка убрана',
      'Done' => 'Готово',
      'Access denied' => 'В доступе отказано',
      'Not found' => 'Не найдено',
      'Access' => 'Доступ',
      'Timeout' => 'Timeout',
      'No internet' => 'No internet',
      'Network error' => 'Network error',
      'Are you sure?' => 'Вы уверены?',
      'Record has been removed' => 'Запись была удалена',
      'Wrong username/password' => 'Неверное имя пользователя/пароль',
      'Post cannot be empty' => 'Сообщение не может быть пустым',
      'Username can not be empty!' => 'Имя пользователя не может быть пустым!',
      'Cache is not enabled' => 'Кэш не подключен',
      'Cache has been cleared' => 'Кэш был очищен',
      'Rebuild has been done' => 'Перестройка ПО была выполнена',
      'Return to Application' => 'Вернуться к приложению',
      'Modified' => 'Изменено',
      'Created' => 'Создано',
      'Create' => 'Создать',
      'create' => 'создать',
      'Scheduled' => 'Scheduled',
      'Overview' => 'Обзор',
      'Details' => 'Описание',
      'Add Field' => 'Добавить поле',
      'Add Dashlet' => 'Добавить виджет',
      'Filter' => 'Фильтр',
      'Edit Dashboard' => 'Редактировать панель',
      'Add' => 'Добавить',
      'Add Item' => 'Добавить',
      'Reset' => 'Сбросить',
      'Menu' => 'Меню',
      'More' => 'Больше',
      'Search' => 'Искать',
      'Only My' => 'Только мои',
      'Open' => 'Открыть',
      'Admin' => 'Администратор',
      'About' => 'О программе',
      'Refresh' => 'Обновить',
      'Remove' => 'Удалить',
      'Restore' => 'Восстановить',
      'Options' => 'Опции',
      'Username' => 'Имя пользователя',
      'Password' => 'Пароль',
      'Login' => 'Войти',
      'Log Out' => 'Выйти',
      'Log in' => 'Войти',
      'Log in as' => 'Войдите в систему как',
      'Sign in' => 'Войти',
      'Preferences' => 'Персональные Настройки',
      'State' => 'Регион',
      'Street' => 'Улица',
      'Country' => 'Страна',
      'City' => 'Город',
      'PostalCode' => 'Индекс',
      'Star' => 'Star',
      'Unstar' => 'Unstar',
      'Starred' => 'Starred',
      'Followed' => 'Вы подписаны',
      'Follow' => 'Подписаться',
      'Followers' => 'Подписчики',
      'Clear Local Cache' => 'Очистить локальный кэш',
      'Actions' => 'Действия',
      'Delete' => 'Удалить',
      'Update' => 'Обновить',
      'Save' => 'Сохранить',
      'Edit' => 'Редактировать',
      'View' => 'Просмотреть',
      'Cancel' => 'Отменить',
      'Apply' => 'Применить',
      'Unlink' => 'Убрать ссылку',
      'Mass Update' => 'Массовое обновление',
      'Export' => 'Экспортировать',
      'No Data' => 'Нет данных',
      'No Access' => 'Нет доступа',
      'All' => 'Все',
      'Active' => 'Активный',
      'Inactive' => 'Неактивный',
      'Write your comment here' => 'Оставьте свою заметку здесь',
      'Post' => 'Разместить',
      'Stream' => 'Лента',
      'Show more' => 'Показать еще',
      'Dashlet Options' => 'Настройки панели',
      'Full Form' => 'Раширенная форма',
      'Insert' => 'Вставить',
      'Person' => 'Личность',
      'First Name' => 'Имя',
      'Last Name' => 'Фамилия',
      'Middle Name' => 'Отчество',
      'Original' => 'Оригинал',
      'You' => 'Вы',
      'you' => 'вы',
      'change' => 'изменить',
      'Change' => 'Изменить',
      'Primary' => 'Основной',
      'Save Filter' => 'Сохранить фильтр',
      'Remove Filter' => 'Remove Filter',
      'Ready' => 'Ready',
      'Administration' => 'Администрирование',
      'Run Import' => 'Импортировать',
      'Duplicate' => 'Дубликат',
      'Notifications' => 'Оповещения',
      'Mark all read' => 'Пометить все как прочитанное',
      'See more' => 'Подробнее',
      'Today' => 'Сегодня',
      'Tomorrow' => 'Завтра',
      'Yesterday' => 'Вчера',
      'Now' => 'Now',
      'Submit' => 'Отправить',
      'Close' => 'Закрыть',
      'Yes' => 'Да',
      'No' => 'Нет',
      'Select All Results' => 'Выбрать все результати',
      'Value' => 'Значение',
      'Edit Item' => 'Edit Item',
      'Current version' => 'Текущая версия',
      'List View' => 'Отображать в виде списка',
      'Tree View' => 'Отображать в виде дерева',
      'Unlink All' => 'Убрать все ссылки',
      'Total' => 'Всего',
      'Print' => 'Печать',
      'Print to PDF' => 'Распечатать в PDF',
      'Default' => 'По умолчанию',
      'Number' => 'Номер',
      'From' => 'От',
      'To' => 'До',
      'Create Post' => 'Создать сообщение',
      'Previous Entry' => 'Предыдущая запись',
      'Next Entry' => 'Следующая запись',
      'View List' => 'Просмотреть список',
      'Attach File' => 'Прикрепить файл',
      'Skip' => 'Пропустить',
      'Attribute' => 'Атрибут',
      'Function' => 'Функция',
      'Self-Assign' => 'Назначить на себя',
      'Self-Assigned' => 'Назначен на себя',
      'Expand' => 'Развернуть',
      'Collapse' => 'Свернуть',
      'Expanded' => 'Expanded',
      'Collapsed' => 'Collapsed',
      'Top Level' => 'Top Level',
      'New notifications' => 'Новые уведомления',
      'Manage Categories' => 'Управление категориями',
      'Manage Folders' => 'Управление папками',
      'Convert to' => 'Конвертировать в',
      'View Personal Data' => 'Просмотреть личные данные',
      'Personal Data' => 'Личные данные',
      'Erase' => 'Стереть',
      'View Followers' => 'Просмотреть подписчиков',
      'Convert Currency' => 'Конвертировать валюту',
      'View on Map' => 'Просмотреть на карте',
      'Preview' => 'Предварительный просмотр',
      'Move Over' => 'Подвинуть',
      'Up' => 'Вверх',
      'Save & Continue Editing' => 'Сохранить и продолжить редактирование',
      'Save & New' => 'Сохранить и создать новую запись',
      'Field' => 'Поле',
      'Fields' => 'Fields',
      'Resolution' => 'Разрешение',
      'Resolve Conflict' => 'Разрешить конфликт',
      'Download' => 'Скачать',
      'Global Search' => 'Глобальный поиск',
      'Navigation Panel' => 'Показать панель навигации',
      'Copy to Clipboard' => 'Копирование в буфер обмена',
      'Copied to clipboard' => 'Копируется в буфер обмена',
      'Audit Log' => 'Audit Log',
      'View Audit Log' => 'View Audit Log',
      'View User Access' => 'View User Access',
      'Reacted' => 'Reacted',
      'Reaction Removed' => 'Reaction Removed',
      'Reactions' => 'Reactions',
      'Schedule' => 'Расписание',
      'Log' => 'Журнал',
      'Scheduler' => 'Планировщик',
      'Create InboundEmail' => 'Создать входящую эл. почту',
      'Activities' => 'Деятельность',
      'History' => 'История',
      'Attendees' => 'Участники',
      'Schedule Meeting' => 'Запланировать встречу',
      'Schedule Call' => 'Запланировать звонок',
      'Compose Email' => 'Написать эл. письмо',
      'Log Meeting' => 'Записать встречу',
      'Log Call' => 'Записать звонок',
      'Archive Email' => 'Отправить эл. письмо в архив',
      'Create Task' => 'Создать задачу',
      'Tasks' => 'Задачи'
    ],
    'messages' => [
      'pleaseWait' => 'Пожалуйста, подождите...',
      'loading' => 'Загрузка ...',
      'saving' => 'Сохраняется ...',
      'confirmLeaveOutMessage' => 'Вы действительно хотите покинуть эту форму?',
      'notModified' => 'Вы не внесли изменения в запись',
      'duplicate' => 'Создаваемая запись является дубликатом уже существующей',
      'dropToAttach' => 'Перетащите чтоб прикрепить',
      'pageNumberIsOutOfBound' => 'Page number is out of bound',
      'fieldUrlExceedsMaxLength' => 'Кодированный URL превышает максимальную длину {maxLength}',
      'fieldNotMatchingPattern' => '{поле} не соответствует шаблону `{шаблон}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{поле} содержит недопустимые символы',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{поле} не должно содержать специальных символов ASCII',
      'fieldNotMatchingPattern$latinLetters' => '{поле} может содержать только латинские буквы',
      'fieldNotMatchingPattern$latinLettersDigits' => '{поле} может содержать только латинские буквы и цифры',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{поле} может содержать только латинские буквы, цифры и пробелы',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{поле} может содержать только латинские буквы и пробелы',
      'fieldNotMatchingPattern$digits' => '{поле} может содержать только цифры',
      'fieldNotMatchingPattern$uriOptionalProtocol' => '{поле} должно быть действительным URL',
      'fieldNotMatchingPattern$phoneNumberLoose' => '{field} contains characters not allowed in a phone number',
      'fieldInvalid' => '{field} недопустимое значение',
      'fieldIsRequired' => '{field} обязательно',
      'fieldPhoneInvalid' => '{field} недопустимое значение',
      'fieldPhoneInvalidCode' => 'Invalid country code',
      'fieldPhoneTooShort' => '{field} is too short',
      'fieldPhoneTooLong' => '{field} is too long',
      'fieldPhoneInvalidCharacters' => 'Разрешены только цифры, латинские буквы и символы `-+_@:#().`.',
      'fieldPhoneExtensionTooLong' => 'Extension should not be longer than {maxLength}',
      'fieldShouldBeEmail' => '{field} должен быть действующим адресом эл.почты',
      'fieldShouldBeFloat' => '{field} должно быть допустимым числом с плавающей запятой',
      'fieldShouldBeInt' => '{field} должно быть действительным целым числом',
      'fieldShouldBeNumber' => '{поле} должно быть допустимым числом',
      'fieldShouldBeDate' => '{field} должно быть действительной датой',
      'fieldShouldBeDatetime' => '{field} должно быть действительной датой / временем',
      'fieldShouldAfter' => '{field} должно быть после {otherField}',
      'fieldShouldBefore' => '{field} должно быть до {otherField}',
      'fieldShouldBeBetween' => '{field} должно быть между {min} и {max}',
      'fieldShouldBeLess' => '{поле} не должно быть больше {значения}',
      'fieldShouldBeGreater' => '{поле} не должно быть меньше {значения}',
      'fieldBadPasswordConfirm' => '{field} подтверждено неверно',
      'fieldMaxFileSizeError' => 'Размер файла не должен превышать {max} Мб.',
      'fieldValueDuplicate' => 'Дублирующее значение',
      'fieldIsUploading' => 'Выполняется загрузка',
      'fieldExceedsMaxCount' => 'Количество превышает максимально допустимое {maxCount}',
      'barcodeInvalid' => '{field} is not valid {type}',
      'arrayItemMaxLength' => 'Длина элемента не должна превышать {max} символов',
      'arrayInputNotEmpty' => 'Item is entered but not added',
      'resetPreferencesDone' => 'Были восстановлены значения по умолчанию',
      'confirmation' => 'Вы уверены?',
      'unlinkAllConfirmation' => 'Вы действительно хотите убрать все связанные записи?',
      'resetPreferencesConfirmation' => 'Вы действительно хотите восстановить значения по умолчанию?',
      'removeRecordConfirmation' => 'Вы действительно хотите удалить запись?',
      'unlinkRecordConfirmation' => 'Вы действительно хотите убрать связанную запись?',
      'removeSelectedRecordsConfirmation' => 'Вы действительно хотите удалить выбранные записи?',
      'unlinkSelectedRecordsConfirmation' => 'Вы уверены, что хотите убрать выбранные записи?',
      'massUpdateResult' => '{count} записей было обновлено',
      'massUpdateResultSingle' => '{count} запись была обновлена',
      'recalculateFormulaConfirmation' => 'Вы уверены что хотите пересчитать формулу для выбраных записей?',
      'noRecordsUpdated' => 'Записи не были обновлены',
      'massRemoveResult' => '{count} записей было удалено',
      'massRemoveResultSingle' => '{count} запись была удалена',
      'noRecordsRemoved' => 'Записи не были удалены',
      'changesLossConfirmation' => 'Unsaved changes will be lost. Are you sure?',
      'clickToRefresh' => 'Нажмите для обновления',
      'writeYourCommentHere' => 'Оставьте свою заметку здесь',
      'writeMessageToUser' => 'Оставить сообщение для {user}',
      'writeMessageToSelf' => 'Оставить сообщение для себя',
      'typeAndPressEnter' => 'Введите и нажмите enter',
      'checkForNewNotifications' => 'Проверить новые оповещения',
      'checkForNewNotes' => 'Проверить новые события в Ленте',
      'internalPost' => 'Сообщение будет видно только внутренним пользователям',
      'internalPostTitle' => 'Сообщение видно только внутренним пользователям',
      'done' => 'Готово',
      'notUpdated' => 'Не обновлено',
      'confirmMassUpdate' => 'Are you sure you want to mass-update selected records?',
      'confirmMassFollow' => 'Вы уверены, что хотите подписаться на выбранные записи?',
      'confirmMassUnfollow' => 'Вы уверены, что хотите отписаться от выбранных записей?',
      'massFollowResult' => '{count} в настоящее время идут записи ',
      'massUnfollowResult' => '{count} запись в настоящее время не выполняется',
      'massFollowResultSingle' => '{count} запись выполняется',
      'massUnfollowResultSingle' => '{count} запись сейчас не выполняется',
      'massFollowZeroResult' => 'Не на что подписываться',
      'massUnfollowZeroResult' => 'Не от чего отписываться',
      'erasePersonalDataConfirmation' => 'Отмеченные поля будут стерты навсегда. Вы уверены?',
      'maintenanceModeError' => 'В настоящее время приложение находится в режиме обслуживания.',
      'maintenanceMode' => 'В настоящее время приложение находится в режиме обслуживания. Только администраторы имеют доступ.

Режим обслуживания можно отключить в разделе Администрирование → Настройки.',
      'resolveSaveConflict' => 'Запись была изменена. Вам необходимо разрешить конфликт, прежде чем сохранять запись.',
      'massPrintPdfMaxCountError' => 'Невозможно напечатать больше {maxCount} записей.',
      'massActionProcessed' => 'Массовое действие было обработано.',
      'validationFailure' => 'Сбой проверки бэкенда.

Поле: `{field}`
Валидация: `{type}`',
      'extensionLicenseInvalid' => 'Недопустимая лицензия расширения \'{name}\'.',
      'extensionLicenseExpired' => 'Срок действия подписки на лицензию расширения \'{name}\' истек.',
      'extensionLicenseSoftExpired' => 'Срок действия подписки на лицензию расширения \'{name}\' истек.',
      'confirmAppRefresh' => 'Приложение было обновлено. Рекомендуется обновить страницу для обеспечения правильного функционирования.',
      'loggedOutLeaveOut' => 'Вышел из системы. Сессия неактивна. Вы можете потерять несохраненные данные формы после обновления страницы. Вам может понадобиться сделать копию.',
      'noAccessToRecord' => 'Операция требует `{действие}` доступа к записи.',
      'noAccessToForeignRecord' => 'Операция требует доступа `{action}` к посторонней записи.',
      'noLinkAccess' => 'Can\'t relate with {foreignEntityType} record through the link \'{link}\'. No access.',
      'cannotUnrelateRequiredLink' => 'Не удается удалить требуемую ссылку.',
      'cannotRelateNonExisting' => 'Невозможно установить связь с несуществующей записью {foreignEntityType}.',
      'cannotRelateForbidden' => 'Невозможно установить связь с запрещенной записью {foreignEntityType}. Требуется доступ к `{action}`.',
      'cannotRelateForbiddenLink' => 'Нет доступа к ссылке \'{link}\'.',
      'cannotLinkAlreadyLinked' => 'Cannot link an already linked record.',
      'error404' => 'Запрошенный вами url не может быть обработан.',
      'error403' => 'You don\'t have access to this area.',
      'emptyMassUpdate' => 'Нет полей, доступных для массового обновления.',
      'attemptIntervalFailure' => 'The operation is not allowed during a specific time interval. Wait for some time before the next attempt.',
      'confirmRestoreFromAudit' => 'The previous values will be set in a form. Then you can save the record to restore the previous values.',
      'starsLimitExceeded' => 'The number of stars exceeded the limit.',
      'select2OrMoreRecords' => 'Select 2 or more records',
      'selectNotMoreThanNumberRecords' => 'Select not more than {number} records',
      'selectAtLeastOneRecord' => 'Select at least one record',
      'duplicateConflict' => 'A record already exists.',
      'cannotRemoveCategoryWithChildCategory' => 'Cannot remove a category that has a child category.',
      'cannotRemoveNotEmptyCategory' => 'Cannot remove a non-empty category.',
      'sameRecordIsAlreadyBeingEdited' => 'The record is already being edited.'
    ],
    'boolFilters' => [
      'onlyMy' => 'Только мои',
      'onlyMyTeam' => 'Моя группа',
      'followed' => 'Вы подписаны',
      'shared' => 'Shared'
    ],
    'presetFilters' => [
      'followed' => 'Вы подписаны',
      'all' => 'Все',
      'starred' => 'Starred',
      'active' => 'Active'
    ],
    'massActions' => [
      'delete' => 'Удалить',
      'remove' => 'Удалить',
      'merge' => 'Объединить',
      'update' => 'Обновить',
      'massUpdate' => 'Массовое обновление',
      'unlink' => 'Убрать ссылку',
      'export' => 'Экспортировать',
      'follow' => 'Подписаться',
      'unfollow' => 'Отписаться',
      'convertCurrency' => 'Конвертировать валюту',
      'recalculateFormula' => 'Пересчитать формулу',
      'printPdf' => 'Распечатать в PDF'
    ],
    'fields' => [
      'name' => 'Название',
      'firstName' => 'Имя',
      'lastName' => 'Фамилия',
      'middleName' => 'Отчество',
      'salutationName' => 'Обращение',
      'assignedUser' => 'Ответственный',
      'assignedUsers' => 'Ответственные',
      'collaborators' => 'Collaborators',
      'emailAddress' => 'Адрес эл. почты',
      'emailAddressData' => 'Данные адреса эл. почты',
      'emailAddressIsOptedOut' => 'Эл. адрес не участвует в рассылке массовых сообщений',
      'emailAddressIsInvalid' => 'Адрес электронной почты недействителен',
      'assignedUserName' => 'Имя ответственного',
      'teams' => 'Группы',
      'users' => 'Users',
      'createdAt' => 'Создано в',
      'modifiedAt' => 'Изменено в',
      'createdBy' => 'Создано (кем)',
      'modifiedBy' => 'Изменено (кем)',
      'streamUpdatedAt' => 'Stream Updated At',
      'description' => 'Описание',
      'address' => 'Адрес',
      'phoneNumber' => 'Телефон',
      'phoneNumberMobile' => 'Телефон (Мобильный)',
      'phoneNumberHome' => 'Телефон (Домашний)',
      'phoneNumberFax' => 'Телефон (Факс)',
      'phoneNumberOffice' => 'Телефон (Офисный)',
      'phoneNumberOther' => 'Телефон (Дополнительно)',
      'phoneNumberData' => 'Данные телефонного номера',
      'phoneNumberIsOptedOut' => 'Номер телефона не участвует в звонках',
      'phoneNumberIsInvalid' => 'Номер телефона недействителен',
      'order' => 'Порядок',
      'parent' => 'Источник',
      'children' => 'Потомок',
      'id' => 'ID - уникальный идентификатор',
      'ids' => 'IDs-система обнаружения вторжения',
      'type' => 'Тип',
      'names' => 'Названия',
      'types' => 'Типы',
      'targetListIsOptedOut' => 'Отписалось (Списки целей)',
      'childList' => 'Child List',
      'billingAddressCity' => 'Город',
      'billingAddressCountry' => 'Страна',
      'billingAddressPostalCode' => 'Индекс',
      'billingAddressState' => 'Регион',
      'billingAddressStreet' => 'Улица',
      'billingAddressMap' => 'Карта',
      'addressCity' => 'Город',
      'addressStreet' => 'Улица',
      'addressCountry' => 'Страна',
      'addressState' => 'Регион',
      'addressPostalCode' => 'Индекс',
      'addressMap' => 'Карта',
      'shippingAddressCity' => 'Город доставки',
      'shippingAddressStreet' => 'Улица доставки',
      'shippingAddressCountry' => 'Страна доставки',
      'shippingAddressState' => 'Регион доставки',
      'shippingAddressPostalCode' => 'Индекс доставки',
      'shippingAddressMap' => 'Карта (доставка)'
    ],
    'links' => [
      'assignedUser' => 'Ответственный',
      'assignedUsers' => 'Assigned Users',
      'collaborators' => 'Collaborators',
      'createdBy' => 'Создан (кем)',
      'modifiedBy' => 'Изменен (кем)',
      'team' => 'Группа',
      'roles' => 'Роли',
      'teams' => 'Группы',
      'users' => 'Пользователи',
      'parent' => 'Источник',
      'children' => 'Потомок',
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'leads' => 'Лиды',
      'meetings' => 'Встречи',
      'calls' => 'Звонки',
      'tasks' => 'Задачи',
      'emails' => 'Эл. письма',
      'accounts' => 'Контрагенты',
      'cases' => 'Обращения',
      'documents' => 'Документы',
      'account' => 'Контрагент',
      'opportunity' => 'Cделка',
      'contact' => 'Контакт'
    ],
    'dashlets' => [
      'Stream' => 'Лента',
      'Emails' => 'Моя почта',
      'Iframe' => 'Отдельное окно',
      'Records' => 'Список записей',
      'Memo' => 'Памятка',
      'Leads' => 'Мои лиды',
      'Opportunities' => 'Мои сделки',
      'Tasks' => 'Мои задачи',
      'Cases' => 'Мои обращения',
      'Calendar' => 'Календарь',
      'Calls' => 'Мои звонки',
      'Meetings' => 'Мои встречи',
      'OpportunitiesByStage' => 'Сделки по стадиям',
      'OpportunitiesByLeadSource' => 'Сделки по источнику лидов',
      'SalesByMonth' => 'Продажи по месяцам',
      'SalesPipeline' => 'Источники продаж',
      'Activities' => 'Моя деятельность'
    ],
    'notificationMessages' => [
      'assign' => 'Вам было назначено {entityType} {entity}',
      'emailReceived' => 'Получено эл. письмо от {from}',
      'entityRemoved' => '{user} удалил {entityType} {entity}',
      'emailInbox' => '{user} added email {entity} to your inbox',
      'userPostReaction' => '{user} reacted to your {post}',
      'userPostInParentReaction' => '{user} reacted to your {post} in {entityType} {entity}',
      'eventAttendee' => '{user} добавил вас в {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} оставил примечание к {entityType} {entity}',
      'attach' => '{user} прикрепил к {entityType} {entity}',
      'status' => '{user} обновил {field} (чего) {entityType} {entity}',
      'update' => '{user} обновил {entityType} {entity}',
      'postTargetTeam' => '{user} оставил сообщение для группы {target}',
      'postTargetTeams' => '{user} оставил сообщение для групп {target}',
      'postTargetPortal' => '{user} оставил сообщение для портала {target}',
      'postTargetPortals' => '{user} оставил сообщение для порталов {target}',
      'postTarget' => '{user} оставил сообщение для {target}',
      'postTargetYou' => '{user} оставил сообщение для Вас',
      'postTargetYouAndOthers' => '{user} оставил сообщение для {target} и для Вас',
      'postTargetAll' => '{user} оставил сообщение для всех',
      'postTargetSelf' => '{user} оставил сообщение у себя на ленте',
      'postTargetSelfAndOthers' => '{user} оставил сообщение для {target} и для себя',
      'mentionInPost' => '{user} упомянул {mentioned} в {entityType} {entity}',
      'mentionYouInPost' => '{user} упомянул Вас в {entityType} {entity}',
      'mentionInPostTarget' => '{user} упомянул {mentioned} в сообщении',
      'mentionYouInPostTarget' => '{user} упомянул Вас в сообщении для {target}',
      'mentionYouInPostTargetAll' => '{user} упомянул Вас в сообщении для всех',
      'mentionYouInPostTargetNoTarget' => '{user} упомянул Вас в сообщении',
      'create' => '{user} создал {entityType} {entity}',
      'createThis' => '{user} создал {entityType}',
      'createAssignedThis' => '{user} создал {entityType} назначил {assignee}',
      'createAssigned' => '{user} создал {entityType} {entity} (кому) {assignee}',
      'createAssignedYou' => '{user} создал {entityType} {entity} Вам',
      'createAssignedThisSelf' => '{user} создал этот {entityType} self-assigned',
      'createAssignedSelf' => '{user} создал {entityType} {entity} self-assigned',
      'assign' => '{user} назначил {entityType} {entity} (кому) {assignee}',
      'assignThis' => '{user} назначил {entityType} {assignee}',
      'assignYou' => '{user} назначил {entityType} {entity} Вам',
      'assignThisVoid' => '{user} не назначил это {entityType}',
      'assignVoid' => '{user} неназначенный {entityType} {entity}',
      'assignThisSelf' => '{user} назначил {entityType} на себя',
      'assignSelf' => '{user} назначил {entityType} {entity} на себя',
      'assignMultiAdd' => '{user} assigned {entity} to {assignee}',
      'assignMultiRemove' => '{user} unassigned {entity} from {removedAssignee}',
      'assignMultiAddRemove' => '{user} assigned {entity} to {assignee} and unassigned from {removedAssignee}',
      'assignMultiAddThis' => '{user} назначил {entityType} {assignee}',
      'assignMultiRemoveThis' => '{user} unassigned this {entityType} from {removedAssignee}',
      'assignMultiAddRemoveThis' => '{user} assigned this {entityType} to {assignee} and unassigned from {removedAssignee}',
      'postThis' => '{user} оставил сообщение',
      'attachThis' => '{user} прикрепил',
      'statusThis' => '{user} обновил {field}',
      'updateThis' => '{user} обновил {entityType}',
      'createRelatedThis' => '{user} создал {relatedEntityType} {relatedEntity} относящееся к {entityType}',
      'createRelated' => '{user} создал {relatedEntityType} {relatedEntity} относящееся к {entityType} {entity}',
      'relate' => '{user} связал {relatedEntityType} {relatedEntity} с {entityType} {entity}',
      'relateThis' => '{user} связал {relatedEntityType} {relatedEntity} с этим {entityType}',
      'unrelate' => '{user} отсоединил {relatedEntityType} {relatedEntity} от {entityType} {entity}',
      'unrelateThis' => '{user} отсоединил {relatedEntityType} {relatedEntity} от этого {entityType}',
      'emailReceivedFromThis' => 'Получено эл. письмо от {from}',
      'emailReceivedInitialFromThis' => 'Получено эл. письмо от {from}, {entityType} создано',
      'emailReceivedThis' => 'Получено эл. письмо',
      'emailReceivedInitialThis' => 'Получено эл. письмо, создано {entityType}',
      'emailReceivedFrom' => 'Получено эл. письмо от {from}, относится к {entityType} {entity}',
      'emailReceivedFromInitial' => 'Получено эл. письмо от {from}, {entityType} {entity} создано',
      'emailReceived' => 'Получено эл. письмо относящееся к {entityType} {entity}',
      'emailReceivedInitial' => 'Получено эл. письмо: {entityType} {entity} создано',
      'emailReceivedInitialFrom' => 'Получено эл. письмо от {from}, {entityType} {entity} создано',
      'emailSent' => '{by} отправил эл. письмо относящееся к {entityType} {entity}',
      'emailSentThis' => '{by} отправил эл. письмо',
      'eventConfirmationAccepted' => '{invitee} принял участие в {entityType} {entity}',
      'eventConfirmationDeclined' => '{invitee} отказался от участия в {entityType} {entity}',
      'eventConfirmationTentative' => '{invitee} предварительно намерен принять участие в {entityType} {entity}',
      'eventConfirmationAcceptedThis' => '{invitee} принял участие',
      'eventConfirmationDeclinedThis' => '{invitee} отказался от участия',
      'eventConfirmationTentativeThis' => '{инвитируемый} проявляет осторожность в отношении участия'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} оставил сообщение для {target} и для себя'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} оставила сообщение для {target} и для себя'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Январь',
        1 => 'Февраль',
        2 => 'Март',
        3 => 'Апрель',
        4 => 'Май',
        5 => 'Июнь',
        6 => 'Июль',
        7 => 'Август',
        8 => 'Сентябрь',
        9 => 'Октябрь',
        10 => 'Ноябрь',
        11 => 'Декабрь'
      ],
      'monthNamesShort' => [
        0 => 'Янв',
        1 => 'Февр',
        2 => 'Март',
        3 => 'Апр',
        4 => 'Май',
        5 => 'Июнь',
        6 => 'Июль',
        7 => 'Авг',
        8 => 'Сент',
        9 => 'Окт',
        10 => 'Нояб',
        11 => 'Дек'
      ],
      'dayNames' => [
        0 => 'Воскресенье',
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота'
      ],
      'dayNamesShort' => [
        0 => 'Вскр',
        1 => 'Пнд',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чтв',
        5 => 'Птн',
        6 => 'Сб'
      ],
      'dayNamesMin' => [
        0 => 'Вс',
        1 => 'Пн',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чт',
        5 => 'Пт',
        6 => 'Сб'
      ]
    ],
    'durationUnits' => [
      'd' => 'д',
      'h' => 'ч',
      'm' => 'м',
      's' => 'с'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Г-н.',
        'Mrs.' => 'Г-жа.',
        'Ms.' => 'Мисс.',
        'Dr.' => 'Д-р.'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'На',
        'notOn' => 'Не на',
        'after' => 'После',
        'before' => 'До',
        'between' => 'Между',
        'today' => 'Сегодня',
        'past' => 'Прошлое',
        'future' => 'Будущее',
        'currentMonth' => 'Текущий месяц',
        'lastMonth' => 'Прошлый месяц',
        'nextMonth' => 'Следующий месяц',
        'currentQuarter' => 'Текущий квартал',
        'lastQuarter' => 'Прошлый квартал',
        'currentYear' => 'Текущий год',
        'lastYear' => 'Прошлый год',
        'lastSevenDays' => 'Последние 7 дней',
        'lastXDays' => 'Последние X дней',
        'nextXDays' => 'Следующие X дней',
        'ever' => 'Когда-нибудь',
        'isEmpty' => 'Пусто',
        'olderThanXDays' => 'Более давний чем Х дней',
        'afterXDays' => 'После X дней',
        'currentFiscalYear' => 'Текущий фискальный год',
        'lastFiscalYear' => 'Прошлый фискальный год',
        'currentFiscalQuarter' => 'Текущий фискальный квартал',
        'lastFiscalQuarter' => 'Прошлый фискальный квартал'
      ],
      'searchRanges' => [
        'is' => 'Является',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'isOneOf' => 'Любой из',
        'isFromTeams' => 'Из группы',
        'isNot' => 'Не',
        'isNotOneOf' => 'Ни один из',
        'anyOf' => 'Любой из',
        'allOf' => 'Все из',
        'noneOf' => 'Ни один из',
        'any' => 'Любой'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Равняется',
        'like' => 'Как (%)',
        'notLike' => 'не как (%)',
        'startsWith' => 'Начинается с',
        'endsWith' => 'Заканчивается',
        'contains' => 'Содержит',
        'notContains' => 'Не включает в себя',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'notEquals' => 'Не равен',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of'
      ],
      'intSearchRanges' => [
        'equals' => 'Равняется',
        'notEquals' => 'Не равняется',
        'greaterThan' => 'Больше чем',
        'lessThan' => 'Меньше чем',
        'greaterThanOrEquals' => 'Больше чем или равняется',
        'lessThanOrEquals' => 'Меньше чем или равняется',
        'between' => 'Между',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто'
      ],
      'autorefreshInterval' => [
        0 => 'Нет',
        '0.5' => '30 секунд',
        1 => '1 минута',
        2 => '2 минуты',
        5 => '5 минут',
        10 => '10 минут'
      ],
      'phoneNumber' => [
        'Mobile' => 'Мобильный',
        'Office' => 'Офисный',
        'Fax' => 'Факс',
        'Home' => 'Домашний',
        'Other' => 'Дополнительно'
      ],
      'saveConflictResolution' => [
        'current' => 'Текущий',
        'actual' => 'Фактический',
        'original' => 'Оригинал'
      ],
      'reminderTypes' => [
        'Popup' => 'Всплывающее окно',
        'Email' => 'Эл. письмо'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'Вы можете найти перевод здесь: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Полужирный',
          'italic' => 'Курсив',
          'underline' => 'Подчёркнутый',
          'strike' => 'Зачеркнутый',
          'clear' => 'Убрать стили шрифта',
          'height' => 'Высота линии',
          'name' => 'Название шрифта',
          'size' => 'Размер шрифта'
        ],
        'image' => [
          'image' => 'Изображение',
          'insert' => 'Вставить изображение',
          'resizeFull' => 'Восстановить размер',
          'resizeHalf' => 'Уменьшить до 50%',
          'resizeQuarter' => 'Уменьшить до 25%',
          'floatLeft' => 'Расположить слева',
          'floatRight' => 'Расположить справа',
          'floatNone' => 'Расположение по умолчанию',
          'dragImageHere' => 'Перетащите изображение сюда',
          'selectFromFiles' => 'Выбрать из файлов',
          'url' => 'URL адрес изображения',
          'remove' => 'Удалить изображение'
        ],
        'link' => [
          'link' => 'Ссылка',
          'insert' => 'Вставить ссылку',
          'unlink' => 'Убрать ссылку',
          'edit' => 'Редактировать',
          'textToDisplay' => 'Отображаемый текст',
          'url' => 'URL адрес для перехода',
          'openInNewWindow' => 'Открывать в новом окне'
        ],
        'video' => [
          'video' => 'Видео',
          'videoLink' => 'Ссылка на видео',
          'insert' => 'Вставить видео',
          'url' => 'URL адрес видео',
          'providers' => '(Ютуб, Вимео, Вине, Инстаграмм или ДейлиМотион)'
        ],
        'table' => [
          'table' => 'Таблица'
        ],
        'hr' => [
          'insert' => 'Вставить горизонтальную линию'
        ],
        'style' => [
          'style' => 'Стиль',
          'normal' => 'Нормальный',
          'blockquote' => 'Цитата',
          'pre' => 'Код',
          'h1' => 'Заголовок 1',
          'h2' => 'Заголовок 2',
          'h3' => 'Заголовок 3',
          'h4' => 'Заголовок 4',
          'h5' => 'Заголовок 5',
          'h6' => 'Заголовок 6'
        ],
        'lists' => [
          'unordered' => 'Маркированный список',
          'ordered' => 'Нумерованный список'
        ],
        'options' => [
          'help' => 'Помощь',
          'fullscreen' => 'На весь экран',
          'codeview' => 'Исходный код'
        ],
        'paragraph' => [
          'paragraph' => 'Параграф',
          'outdent' => 'Уменьшить отступ',
          'indent' => 'Увеличить отступ',
          'left' => 'Выровнять по левому краю',
          'center' => 'Выровнять по центру',
          'right' => 'Выровнять по правому краю',
          'justify' => 'Растянуть по ширине'
        ],
        'color' => [
          'recent' => 'Последний цвет',
          'more' => 'Еще цвета',
          'background' => 'Back Color',
          'foreground' => 'Font Color',
          'transparent' => 'Прозрачный',
          'setTransparent' => 'Сделать прозрачным',
          'reset' => 'Сбросить',
          'resetToDefault' => 'Восстановить умолчания'
        ],
        'shortcut' => [
          'shortcuts' => 'Сочетания клавиш',
          'close' => 'Закрыть',
          'textFormatting' => 'Форматирование текста',
          'action' => 'Действие',
          'paragraphFormatting' => 'Форматирование параграфа',
          'documentStyle' => 'Стиль документа'
        ],
        'history' => [
          'undo' => 'Отмена',
          'redo' => 'Повтор'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'Список',
      'kanban' => 'Канбан'
    ],
    'themes' => [
      'Dark' => 'Тёмный',
      'Light' => 'Свет',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Сакура',
      'Violet' => 'Фиолетовый',
      'Hazyblue' => 'Дымчато-голубой',
      'Glass' => 'Стекло'
    ],
    'themeNavbars' => [
      'side' => 'Боковая панель навигации',
      'top' => 'Верхняя панель навигации'
    ],
    'fieldValidations' => [
      'required' => 'Обязательное для заполнения',
      'maxCount' => 'Максимальное количество',
      'maxLength' => 'Максимальная длина',
      'pattern' => 'Сопоставление шаблонов',
      'emailAddress' => 'Действительный адрес электронной почты',
      'phoneNumber' => 'Действительный номер телефона',
      'array' => 'Массив',
      'arrayOfString' => 'Массив строк',
      'valid' => 'Validity',
      'noEmptyString' => 'Нет пустой строки',
      'max' => 'Максимальное значение',
      'min' => 'Минимальное значение'
    ],
    'fieldValidationExplanations' => [
      'valid' => 'Invalid value.',
      'maxLength' => 'Value length exceeds maximum value.',
      'phone_valid' => 'Phone number is not valid. May be caused by a wrong or empty country code.',
      'url_valid' => 'Недопустимое значение URL.',
      'currency_valid' => 'Недопустимое значение суммы.',
      'currency_validCurrency' => 'Значение кода валюты недопустимо или не разрешено.',
      'varchar_pattern' => 'Вероятно, значение содержит недопустимые символы.',
      'email_emailAddress' => 'Недопустимое значение адреса электронной почты.',
      'phone_phoneNumber' => 'Недопустимое значение номера телефона.',
      'datetimeOptional_valid' => 'Недопустимое значение даты и времени.',
      'datetime_valid' => 'Недопустимое значение даты и времени.',
      'date_valid' => 'Недопустимое значение даты.',
      'enum_valid' => 'Недопустимое значение перечисления. Значение должно быть одним из определенных параметров перечисления. Пустое значение допускается только в том случае, если поле имеет пустую опцию.',
      'int_valid' => 'Недопустимое значение целого числа.',
      'float_valid' => 'Недопустимое значение числа.',
      'multiEnum_valid' => 'Недопустимое значение множественного перечисления. Значения должны быть одним из определенных параметров поля.'
    ],
    'navbarTabs' => [
      'Business' => 'Бизнес',
      'Marketing' => 'Маркетинг',
      'Support' => 'Поддержка',
      'CRM' => 'CRM',
      'Activities' => 'Деятельность'
    ],
    'wysiwygLabels' => [
      'cell' => 'Cell',
      'align' => 'Align',
      'width' => 'Width',
      'height' => 'Height',
      'borderWidth' => 'Border Width',
      'borderColor' => 'Border Color',
      'cellPadding' => 'Cell Padding',
      'backgroundColor' => 'Background Color',
      'verticalAlign' => 'Vertical Align'
    ],
    'wysiwygOptions' => [
      'align' => [
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right'
      ],
      'verticalAlign' => [
        'top' => 'Top',
        'middle' => 'Middle',
        'bottom' => 'Bottom'
      ]
    ],
    'detailViewModes' => [
      'detail' => 'Detail'
    ],
    'strings' => [
      'yesterdayShort' => 'Yest'
    ],
    'reactions' => [
      'Smile' => 'Smile',
      'Surprise' => 'Surprise',
      'Laugh' => 'Laugh',
      'Meh' => 'Meh',
      'Sad' => 'Sad',
      'Love' => 'Love',
      'Like' => 'Like',
      'Dislike' => 'Dislike'
    ],
    'recordActions' => [
      'create' => 'Create',
      'read' => 'Read',
      'edit' => 'Edit',
      'delete' => 'Delete',
      'stream' => 'Stream'
    ],
    'tabs' => [
      'Stream' => 'Stream'
    ]
  ],
  'GroupEmailFolder' => [
    'links' => [
      'emails' => 'Электронные письма'
    ],
    'labels' => [
      'Create GroupEmailFolder' => 'Создать папку'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'Новый импорт с такими же параметрами',
      'Revert Import' => 'Обратить импортирование',
      'Return to Import' => 'Вернуться к импортированию',
      'Run Import' => 'Импортировать',
      'Back' => 'Назад',
      'Field Mapping' => 'Сопоставление полей',
      'Default Values' => 'Значения по умолчанию',
      'Add Field' => 'Добавить поле',
      'Created' => 'Создано',
      'Updated' => 'Обновлено',
      'Result' => 'Результат',
      'Show records' => 'Показать записи',
      'Remove Duplicates' => 'Убрать дубликаты',
      'importedCount' => 'Импортировано: (count)',
      'duplicateCount' => 'Дубликатов: (count)',
      'updatedCount' => 'Обновлено: (count)',
      'Create Only' => 'Только создать',
      'Create and Update' => 'Создать и обновить',
      'Update Only' => 'Только обновить',
      'Update by' => 'Обновить по',
      'Set as Not Duplicate' => 'Пометить как не дубликат',
      'File (CSV)' => 'Файл (CSV)',
      'First Row Value' => 'Значение из первой строки',
      'Skip' => 'Пропустить',
      'Header Row Value' => 'Значение из строки заголовка',
      'Field' => 'Поле',
      'What to Import?' => 'Что импортировать?',
      'Entity Type' => 'Тип объекта',
      'What to do?' => 'Что делать?',
      'Properties' => 'Свойства',
      'Header Row' => 'Есть строка заголовков',
      'Person Name Format' => 'Формат личных имен',
      'John Smith' => 'Имя Фамилия',
      'Smith John' => 'Фамилия Имя',
      'Smith, John' => 'Фамилия, Имя',
      'Field Delimiter' => 'Разделитель полей',
      'Date Format' => 'Формат даты',
      'Decimal Mark' => 'Десятичный разделитель',
      'Text Qualifier' => 'Спецификатор текста',
      'Time Format' => 'Формат времени',
      'Currency' => 'Валюта',
      'Preview' => 'Предпросмотр',
      'Next' => 'Далее',
      'Step 1' => 'Шаг 1',
      'Step 2' => 'Шаг 2',
      'Double Quote' => 'Двойные кавычки',
      'Single Quote' => 'Одиночные кавычки',
      'Imported' => 'Импортировано',
      'Duplicates' => 'Дубликатов',
      'Skip searching for duplicates' => 'Пропустить поиск дубликатов',
      'Timezone' => 'Часовой пояс',
      'Remove Import Log' => 'Удалить журнал импорта',
      'New Import' => 'Новый импорт',
      'Import Results' => 'Результаты импорта',
      'Run Manually' => 'Запускать вручную',
      'Silent Mode' => 'Тихий режим',
      'Export' => 'Экспорт'
    ],
    'messages' => [
      'importRunning' => 'Импорт выполняется...',
      'noErrors' => 'No errors',
      'utf8' => 'Должен быть в кодировке UTF-8',
      'duplicatesRemoved' => 'Дубликаты убраны',
      'inIdle' => 'Выполнить в фоновом режиме (для крупных данных, через cron)',
      'revert' => 'Это приведет к удалению всех импортированных записей навсегда.',
      'removeDuplicates' => 'Это приведет к удалению всех импортированных записей, которые были распознаны как дубликаты, навсегда.',
      'confirmRevert' => 'Это приведет к удалению всех импортированных записей навсегда. Вы уверены?',
      'confirmRemoveDuplicates' => 'Это приведет к удалению всех импортированных записей, которые были распознаны как дубликаты, навсегда. Вы уверены?',
      'confirmRemoveImportLog' => 'Это удалит журнал импорта. Все импортированные записи будут сохранены. Вы не сможете отменить результаты импорта. Вы уверены?',
      'removeImportLog' => 'Это приведет к удалению журнала импорта. Все импортированные записи будут сохранены. Используйте эту функцию, если вы уверены, что импорт в порядке.'
    ],
    'params' => [
      'phoneNumberCountry' => 'Telephone country code'
    ],
    'fields' => [
      'file' => 'Файл',
      'entityType' => 'Тип объекта',
      'imported' => 'Импортированные записи',
      'duplicates' => 'Дубликаты',
      'updated' => 'Обновленные записи',
      'status' => 'Статус'
    ],
    'links' => [
      'errors' => 'Ошибки'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Сбой',
        'Standby' => 'Ожидать',
        'Pending' => 'В ожидании',
        'In Process' => 'В процессе',
        'Complete' => 'Завершена'
      ],
      'personNameFormat' => [
        'f l' => 'Имя Фамилия',
        'l f' => 'Фамилия Имя',
        'f m l' => 'Имя Отчество Фамилия',
        'l f m' => 'Фамилия Имя Отчество',
        'l, f' => 'Фамилия, Имя'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Команда для запуска (из интерфейса командной строки (CLI))',
      'saveAsDefault' => 'Сохранить по умолчанию'
    ],
    'tooltips' => [
      'manualMode' => 'Если этот флажок установлен, вам нужно будет запустить импорт вручную из интерфейса командной строки. Команда будет показана после настройки импорта.',
      'silentMode' => 'Большинство сценариев после сохранения будут пропущены, примечания к потоку не будут созданы. Импорт будет выполняться быстрее.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Тип',
      'validationFailures' => 'Ошибки валидации',
      'import' => 'Импорт',
      'rowIndex' => 'Индекс строки',
      'exportRowIndex' => 'Индекс строки экспорта',
      'lineNumber' => 'Номер строки',
      'exportLineNumber' => 'Номер линии экспорта',
      'row' => 'Строка',
      'entityType' => 'Тип объекта'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Валидация',
        'Access' => 'Доступ',
        'Not-Found' => 'Не найдено'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'Номер строки в исходном CSV.',
      'exportLineNumber' => 'Номер строки в экспортируемом CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Название',
      'emailAddress' => 'Адрес эл. почты',
      'team' => 'Группа',
      'status' => 'Статус',
      'assignToUser' => 'Назначить пользователю',
      'host' => 'Сервер',
      'username' => 'Имя пользователя',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые папки',
      'trashFolder' => 'Корзина',
      'security' => 'Безопасность',
      'createCase' => 'Создавать обращения',
      'reply' => 'Автоответчик',
      'caseDistribution' => 'Распределение обращений',
      'replyEmailTemplate' => 'Ответить по шаблону',
      'replyFromAddress' => 'Адрес отправителя',
      'replyToAddress' => 'Обратный адрес',
      'replyFromName' => 'Имя отправителя',
      'targetUserPosition' => 'Должность (положение в группе) пользователя',
      'fetchSince' => 'Получить эл. письма начиная с',
      'addAllTeamUsers' => 'Для всех пользователей группы',
      'teams' => 'Группы',
      'sentFolder' => 'Отправленная папка',
      'storeSentEmails' => 'Сохранять отправленные эл. письма',
      'keepFetchedEmailsUnread' => 'Оставлять полученные эл. письма непрочитанными',
      'connectedAt' => 'Connected At',
      'excludeFromReply' => 'Exclude from Reply',
      'useImap' => 'Получать эл. письма',
      'useSmtp' => 'Использовать SMTP',
      'smtpHost' => 'SMTP Хост',
      'smtpPort' => 'SMTP Порт',
      'smtpAuth' => 'SMTP ключ авторизации',
      'smtpSecurity' => 'SMTP Безопасность',
      'smtpAuthMechanism' => 'Механизм аутентификации SMTP',
      'smtpUsername' => 'SMTP Имя пользователя',
      'smtpPassword' => 'SMTP Пароль',
      'fromName' => 'Имя отправителя',
      'smtpIsShared' => 'Общий SMTP',
      'smtpIsForMassEmail' => 'SMTP для массовой рассылки',
      'groupEmailFolder' => 'Папка групповой эл. почты',
      'isSystem' => 'Is System'
    ],
    'tooltips' => [
      'isSystem' => 'Is the system email account.',
      'useSmtp' => 'Возможность отправлять электронные письма.',
      'reply' => 'Уведомлять отправителей, что их эл. письма были получены.

 Чтобы предотвратить зацикливание только одно эл. письмо будет отправлено конкретному получателю в течение некоторого периода времени.',
      'createCase' => 'Автоматически создавать обращения из входящих эл. писем',
      'replyToAddress' => 'Укажите адрес этого ящика эл. почты, чтобы ответы приходили на него.',
      'caseDistribution' => 'Как будут назначаться обращения: непосредственно пользователю или распределяться среди группы.',
      'assignToUser' => 'Эл. письма и обращения будут назначаться этому пользователю.',
      'team' => 'Эл. письма и обращения будут относиться к этой группе.',
      'teams' => 'Группы, которым будут назначены электронные письма.',
      'targetUserPosition' => 'Обращения будут распределены пользователям с определенной позицией.',
      'addAllTeamUsers' => 'Эл. письма будут появляться в папке \'Входящие\' всех пользователей указанной группы.',
      'monitoredFolders' => 'Несколько папок должны быть написаны через запятую.',
      'smtpIsShared' => 'Если отмечено, пользователи смогут отправлять эл. письма с использованием этого SMTP. Доступность контролируется Ролями через разрешение для учетной записи электронной почты группы.',
      'smtpIsForMassEmail' => 'Если отмечено, SMTP будет доступен для массовой рассылки эл. писем.',
      'storeSentEmails' => 'Отправленные эл. письма будут храниться на сервере IMAP.',
      'groupEmailFolder' => 'Поместите входящие электронные письма в групповую папку.',
      'excludeFromReply' => 'When replying on emails sent to this account\'s email address, its email address won\'t be added to CC.

Note that by enabling this parameter, the email address of this account will be exposed to users who have access to send Emails.'
    ],
    'links' => [
      'filters' => 'Фильтры',
      'emails' => 'Эл. письма',
      'assignToUser' => 'Назначить пользователю',
      'groupEmailFolder' => 'Папка групповой эл. почты'
    ],
    'options' => [
      'status' => [
        'Active' => 'Активная',
        'Inactive' => 'Неактивная'
      ],
      'caseDistribution' => [
        '' => 'Нет',
        'Direct-Assignment' => 'Прямое назначение',
        'Round-Robin' => 'По круговому циклу',
        'Least-Busy' => 'Наименее занятому'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN расширение файла',
        'login' => 'Логин',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Создать учетную запись эл. почты',
      'IMAP' => 'IMAP- протокол эл.почты',
      'Actions' => 'Действия',
      'Main' => 'Основное'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Не удалось соединиться с IMAP сервером',
      'imapNotConnected' => 'Could not connect to group [IMAP account](#InboundEmail/view/{id}).'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Включено',
      'clientId' => 'Идентификатор клиента (Client ID)',
      'clientSecret' => 'Секретный ключ (Client Secret)',
      'redirectUri' => 'URI перенаправления (Redirect URI)',
      'apiKey' => 'Ключ API',
      'siteKey' => 'Site Key',
      'secretKey' => 'Secret Key',
      'scoreThreshold' => 'Score Threshold',
      'mapId' => 'Map ID'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Карты',
      'GoogleReCaptcha' => 'Google reCAPTCHA'
    ],
    'messages' => [
      'selectIntegration' => 'Выберите интерацию из меню.',
      'noIntegrations' => 'Нет доступных интергаций.'
    ],
    'help' => [
      'GoogleReCaptcha' => 'Obtain the Site Key and Secret Key from [Google](https://www.google.com/recaptcha/).',
      'Google' => '**Получите учетные данные OAuth 2.0 из Google Developers Console.**

Посетите [Google Developers Console](https://console.developers.google.com/project), чтобы получить учетные данные OAuth 2.0, такие как Client ID и Client Secret, которые известны как Google, так и приложению EspoCRM.',
      'GoogleMaps' => 'Получить ключ API [здесь] (https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Статус',
      'executeTime' => 'Выполнено в',
      'executedAt' => 'Выполнено в',
      'startedAt' => 'Началось в',
      'attempts' => 'Осталось попыток',
      'failedAttempts' => 'Неудачных попыток',
      'serviceName' => 'Сервис',
      'method' => 'Метод',
      'methodName' => 'Метод',
      'scheduledJob' => 'Задание планировщика',
      'scheduledJobJob' => 'Название задания',
      'data' => 'Данные',
      'targetType' => 'Тип цели',
      'targetId' => 'ID цели',
      'number' => 'Номер',
      'queue' => 'Очередь',
      'group' => 'Группа',
      'className' => 'Название класса',
      'targetGroup' => 'Целевая группа',
      'job' => 'Задание'
    ],
    'options' => [
      'status' => [
        'Pending' => 'В ожидании',
        'Success' => 'Успех',
        'Running' => 'Выполняется',
        'Failed' => 'Сбой'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Width',
      'link' => 'Ссылка',
      'notSortable' => 'Не сортируемый',
      'align' => 'Выровнять',
      'panelName' => 'Название панели',
      'style' => 'Стиль',
      'sticked' => 'Stick to top',
      'isMuted' => 'Muted color',
      'isLarge' => 'Большой размер шрифта',
      'hidden' => 'Скрытый',
      'noLabel' => 'Без этикетки',
      'dynamicLogicVisible' => 'Условия, которые делают панель видимой',
      'dynamicLogicStyled' => 'Применяемый стиль создания условий',
      'tabLabel' => 'Ярлык вкладки',
      'tabBreak' => 'Tab-Break',
      'noteText' => 'Note Text',
      'noteStyle' => 'Note Style'
    ],
    'options' => [
      'align' => [
        'left' => 'по левому краю',
        'right' => 'по правому краю'
      ],
      'style' => [
        'default' => 'По умолчанию',
        'success' => 'Успех',
        'danger' => 'Опасность',
        'info' => 'Информация',
        'warning' => 'Предупреждение',
        'primary' => 'Основной'
      ]
    ],
    'labels' => [
      'New panel' => 'Новая панель',
      'Layout' => 'Макет'
    ],
    'messages' => [
      'alreadyExists' => 'Макет `{имя}` уже существует.',
      'createInfo' => 'Пользовательские макеты списков могут использоваться панелями отношений.',
      'cantBeEmpty' => 'Макет не может быть пустым.',
      'fieldsIncompatible' => 'Поля не могут находиться на макете вместе: {fields}.'
    ],
    'tooltips' => [
      'noteText' => 'A text to be displayed in the panel. Markdown is supported.',
      'tabBreak' => 'Отдельная вкладка для панели и всех последующих панелей до следующего разрыва вкладки.',
      'noLabel' => 'Не отображайте метку столбца в заголовке.',
      'notSortable' => 'Отключает возможность сортировки по столбцу.',
      'width' => 'A column width. It\'s recommended to have one column without specified width, usually it should be the *Name* field.',
      'sticked' => 'Панель приклеивается к панели, расположенной выше. Зазор между панелями отсутствует.',
      'hiddenPanel' => 'Чтобы увидеть панель, нужно нажать «показать больше».',
      'panelStyle' => 'Цвет панели.',
      'dynamicLogicVisible' => 'Если задано, то панель будет скрыта, пока не будет выполнено условие.',
      'dynamicLogicStyled' => 'Цвет будет применен при выполнении определенного условия. Цвет определяется параметром *Style*.',
      'link' => 'Если отмечено, значение поля будет отображаться в виде ссылки, указывающей на вид детализации записи. Обычно это используется для полей *Name*.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Макеты'
    ],
    'labels' => [
      'Create LayoutSet' => 'Создать набор макетов',
      'Edit Layouts' => 'Редактировать макеты'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Имя',
      'campaign' => 'Кампания',
      'isActive' => 'Активный',
      'subscribeToTargetList' => 'Подписаться на список целей',
      'subscribeContactToTargetList' => 'Подписаться на контакт, если существует',
      'targetList' => 'Список целей',
      'fieldList' => 'Список полей, чтобы передавать',
      'optInConfirmation' => 'Двойное подтверждение подписки',
      'optInConfirmationEmailTemplate' => 'Шаблон письма для подтверждения подписки',
      'optInConfirmationLifetime' => 'Время подтверждения подписки (часы)',
      'optInConfirmationSuccessMessage' => 'Текст для показа после подтверждения подписки',
      'leadSource' => 'Источник кандидата',
      'apiKey' => 'Ключ API',
      'targetTeam' => 'Группа',
      'exampleRequestMethod' => 'Метод',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Полезная нагрузка',
      'exampleRequestHeaders' => 'Заголовки',
      'createLeadBeforeOptInConfirmation' => 'Создать лидов до подтверждения',
      'skipOptInConfirmationIfSubscribed' => 'Пропустить подтверждение, если кандидат уже в списке целей',
      'smtpAccount' => 'SMTP-аккаунт',
      'inboundEmail' => 'Учетная запись эл. почты группы',
      'duplicateCheck' => 'Проверка на дубликаты',
      'phoneNumberCountry' => 'Telephone country code',
      'fieldParams' => 'Field Params',
      'formId' => 'Form ID',
      'formEnabled' => 'Web Form',
      'formUrl' => 'Form URL',
      'formTitle' => 'Form Title',
      'formTheme' => 'Form Theme',
      'formSuccessText' => 'Text to display after form submission',
      'formText' => 'Text to display on form',
      'formSuccessRedirectUrl' => 'URL to redirect to after form submission',
      'formLanguage' => 'Language used on form',
      'formFrameAncestors' => 'Allowed hosts for form embedding',
      'formCaptcha' => 'Use Captcha'
    ],
    'links' => [
      'targetList' => 'Список целей',
      'campaign' => 'Кампания',
      'optInConfirmationEmailTemplate' => 'Шаблон письма для подтверждения подписки',
      'targetTeam' => 'Группа',
      'inboundEmail' => 'Учетная запись эл. почты группы',
      'logRecords' => 'Журнал'
    ],
    'labels' => [
      'Create LeadCapture' => 'Создать точку входа',
      'Generate New API Key' => 'Сгенерировать новый ключ API',
      'Request' => 'Запрос',
      'Confirm Opt-In' => 'Подтвердить подписку',
      'Generate New Form ID' => 'Generate New Form ID',
      'Web Form' => 'Web Form'
    ],
    'messages' => [
      'generateApiKey' => 'Создать новый ключ API',
      'optInConfirmationExpired' => 'Срок действия ссылки в подтверждение подписки истек.',
      'optInIsConfirmed' => 'Подписку подтверждено.'
    ],
    'tooltips' => [
      'formCaptcha' => 'To be able to use Captcha, you need to configure it under **Administration** > **Integrations**.',
      'optInConfirmationSuccessMessage' => 'Markdown поддерживается.'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Номер',
      'data' => 'Данные',
      'target' => 'Цель',
      'leadCapture' => 'Захват кандидата',
      'createdAt' => 'Введен в',
      'isCreated' => 'Создан кандидат'
    ],
    'links' => [
      'leadCapture' => 'Захват кандидата',
      'target' => 'Цель'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Статус',
      'processedCount' => 'Обработанный граф'
    ],
    'options' => [
      'status' => [
        'Pending' => 'В ожидании',
        'Running' => 'Работает',
        'Success' => 'Выполнено',
        'Failed' => 'Неудачно'
      ]
    ],
    'messages' => [
      'infoText' => 'Массовое действие обрабатывается в режиме ожидания программой cron. Его завершение может занять некоторое время. Закрытие этого модального диалога не повлияет на процесс выполнения.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Разместить',
      'attachments' => 'Вложения',
      'targetType' => 'Цель',
      'teams' => 'Группы',
      'users' => 'Пользователи',
      'portals' => 'Порталы',
      'type' => 'Тип',
      'isGlobal' => 'Глобальный',
      'isInternal' => 'Внутренний (для внутренних пользователей)',
      'isPinned' => 'Is Pinned',
      'related' => 'Связанный',
      'createdByGender' => 'Создано по полу',
      'data' => 'Данные',
      'number' => 'Номер'
    ],
    'filters' => [
      'all' => 'Все',
      'posts' => 'Сообщения',
      'updates' => 'Обновления',
      'activity' => 'Activity'
    ],
    'options' => [
      'targetType' => [
        'self' => 'Self',
        'users' => 'Users',
        'teams' => 'Teams',
        'all' => 'All Internal Users',
        'portals' => 'Portal Users'
      ],
      'type' => [
        'Post' => 'Разместить',
        'Create' => 'Create',
        'CreateRelated' => 'Create Related',
        'Update' => 'Update',
        'Status' => 'Status',
        'Assign' => 'Assign',
        'Relate' => 'Relate',
        'Unrelate' => 'Unrelate',
        'EmailReceived' => 'Email Received',
        'EmailSent' => 'Email Sent'
      ]
    ],
    'labels' => [
      'View Posts' => 'View Posts',
      'View Attachments' => 'View Attachments',
      'View Activity' => 'View Activity',
      'Pin' => 'Pin',
      'Unpin' => 'Unpin',
      'Pinned' => 'Pinned',
      'Quote Reply' => 'Quote Reply'
    ],
    'messages' => [
      'writeMessage' => 'Напишите Ваше сообщение здесь',
      'pinnedMaxCountExceeded' => 'Cannot pin more notes. Max allowed number is {count}.'
    ],
    'links' => [
      'portals' => 'Portals',
      'attachments' => 'Attachments',
      'superParent' => 'Super Parent',
      'related' => 'Связанный'
    ],
    'otherFields' => [
      'to' => 'To'
    ]
  ],
  'OAuthAccount' => [
    'labels' => [
      'Create OAuthAccount' => 'Create OAuth Account',
      'Connection' => 'Connection'
    ],
    'fields' => [
      'provider' => 'Provider',
      'hasAccessToken' => 'Has Access Token',
      'user' => 'User',
      'providerIsActive' => 'Provider is Active',
      'data' => 'Data'
    ],
    'links' => [
      'provider' => 'Provider'
    ]
  ],
  'OAuthProvider' => [
    'labels' => [
      'Create OAuthProvider' => 'Create OAuth Provider'
    ],
    'fields' => [
      'isActive' => 'Is Active',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'authorizationEndpoint' => 'Authorization Endpoint',
      'tokenEndpoint' => 'Token Endpoint',
      'authorizationRedirectUri' => 'Authorization Redirect URI',
      'scopes' => 'Scopes',
      'scopeSeparator' => 'Scope Separator',
      'hasAccessToken' => 'Has Access Token',
      'authorizationPrompt' => 'Authorization Prompt',
      'authorizationParams' => 'Authorization Params'
    ],
    'links' => [
      'accounts' => 'Accounts'
    ],
    'tooltips' => [
      'authorizationParams' => 'Additional query parameters to be sent to the authorization endpoint. Specified in JSON format.'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Тип',
      'optOut' => 'Не звонить',
      'invalid' => 'Неверный номер',
      'numeric' => 'Numeric Value'
    ],
    'presetFilters' => [
      'orphan' => 'Сирота'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Название',
      'logo' => 'Логотип',
      'url' => 'URL - адрес ресурса',
      'portalRoles' => 'Роли',
      'isActive' => 'Активный',
      'isDefault' => 'Портал по умолчанию',
      'tabList' => 'Список вкладок',
      'applicationName' => 'Application Name',
      'quickCreateList' => 'Список для быстрого создания',
      'companyLogo' => 'Логотип',
      'theme' => 'Тема',
      'language' => 'Язык',
      'dashboardLayout' => 'Планировка панели виджетов',
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'defaultCurrency' => 'Валюта по умолчанию',
      'layoutSet' => 'Набор макетов',
      'authenticationProvider' => 'Поставщик аутентификации',
      'customUrl' => 'Пользовательский адрес ресурса URL',
      'customId' => 'Пользовательский ID',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)'
    ],
    'links' => [
      'users' => 'Пользователи',
      'portalRoles' => 'Роли',
      'layoutSet' => 'Набор макетов',
      'authenticationProvider' => 'Поставщик аутентификации',
      'notes' => 'Заметки',
      'articles' => 'Статьи базы знаний'
    ],
    'tooltips' => [
      'layoutSet' => 'Предоставляет возможность иметь макеты, отличные от стандартных.',
      'portalRoles' => 'Указанные роли портала будут применены ко всем пользователям портала.'
    ],
    'labels' => [
      'Create Portal' => 'Создать портал',
      'User Interface' => 'Интерфейс пльзователя',
      'General' => 'Основное',
      'Settings' => 'Настройки'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Разрешение на экспорт',
      'massUpdatePermission' => 'Разрешение на массовое обновление',
      'data' => 'Данные',
      'fieldData' => 'Полевые данные'
    ],
    'links' => [
      'users' => 'Пользователи'
    ],
    'labels' => [
      'Access' => 'Доступ',
      'Create PortalRole' => 'Создать роль портала',
      'Scope Level' => 'Область видимости',
      'Field Level' => 'Поле видимости'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Создать пользователя портала'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Тысячный разделитель',
      'decimalMark' => 'Десятичный разделитель',
      'defaultCurrency' => 'Валюта по умолчанию',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'exportDelimiter' => 'Разделитель полей при экспорте',
      'receiveAssignmentEmailNotifications' => 'Получать оповещения по эл. почте при назначении',
      'receiveMentionEmailNotifications' => 'Уведомления по эл. почте об упоминаниях в сообщениях',
      'receiveStreamEmailNotifications' => 'Уведомления по электронной почте о сообщениях и обновлениях статуса',
      'assignmentNotificationsIgnoreEntityTypeList' => 'Оповещения о назначении в приложении',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Оповещения по эл.почте о назначении',
      'reactionNotifications' => 'In-app notifications about reactions',
      'autoFollowEntityTypeList' => 'Автоподписка',
      'signature' => 'Подпись к эл. письмам',
      'dashboardTabList' => 'Список вкладок',
      'defaultReminders' => 'Напоминания по умолчанию.',
      'defaultRemindersTask' => 'Default Reminders for Tasks',
      'theme' => 'Тема',
      'pageContentWidth' => 'Content Width',
      'useCustomTabList' => 'Настраиваемый список вкладок',
      'addCustomTabs' => 'Add Custom Tabs',
      'tabList' => 'Список вкладок',
      'emailReplyToAllByDefault' => 'Отправить ответ всем по умолчанию',
      'dashboardLayout' => 'Планировка панели виджетов',
      'dashboardLocked' => 'Приборная панель блокировки',
      'emailReplyForceHtml' => 'Отправить ответ в HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Не заполнять предварительно назначенного пользователя при создании записи',
      'followEntityOnStreamPost' => 'Автоматически подписаться поле публикации в ленте',
      'followCreatedEntities' => 'Автоматически подписаться на созданные записи',
      'followCreatedEntityTypeList' => 'Автоматически подписаться на созданные записи конкретных типов объектов',
      'emailUseExternalClient' => 'Использовать внешний почтовый клиент',
      'textSearchStoringDisabled' => 'Отключить сохранение текстового фильтра',
      'calendarSlotDuration' => 'Calendar Slot Duration',
      'calendarScrollHour' => 'Calendar Scroll to Hour'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Воскресенье',
        1 => 'Понедельник'
      ],
      'pageContentWidth' => [
        '' => 'Normal',
        'Wide' => 'Wide'
      ]
    ],
    'labels' => [
      'Notifications' => 'Оповещения',
      'User Interface' => 'Интерфейс пльзователя',
      'Misc' => 'Разное',
      'Locale' => 'Локаль',
      'Reset Dashboard to Default' => 'Сбросить настройки панели виджетов по умолчанию'
    ],
    'tooltips' => [
      'addCustomTabs' => 'If checked, custom tabs will be appended to default tabs. Otherwise, custom tabs will be used instead of default tabs.',
      'autoFollowEntityTypeList' => 'Пользователь будет автоматически подисан на все новые записи о выбранных типах объектов, будет видеть эту информацию в ленте и получать оповещения.',
      'doNotFillAssignedUserIfNotRequired' => 'При создании записи поле ответственного пользователя не будет заполнено пользователем, который создал запись, если это поле не обязательно.',
      'followCreatedEntities' => 'При создании новых записей они будут автоматически отслеживаться, даже если они назначены другому пользователю.',
      'followCreatedEntityTypeList' => 'При создании новых записей выбранных типов объектов они будут отслеживаться автоматически, даже если они назначены другому пользователю.'
    ],
    'tabFields' => [
      'label' => 'Label',
      'iconClass' => 'Icon',
      'color' => 'Color'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Название',
      'roles' => 'Роли',
      'assignmentPermission' => 'Разрешение для назначения',
      'userPermission' => 'Разрешение видеть пользователей',
      'messagePermission' => 'Разрешение на сообщение',
      'portalPermission' => 'Разрешение портала',
      'groupEmailAccountPermission' => 'Разрешение для учетной записи эл. почты группы',
      'exportPermission' => 'Разрешение на экспорт',
      'massUpdatePermission' => 'Разрешение на массовое обновление',
      'followerManagementPermission' => 'Разрешение на управление подписчиками',
      'dataPrivacyPermission' => 'Разрешение на обработку конфиденциальных данных',
      'auditPermission' => 'Audit Permission',
      'mentionPermission' => 'Mention Permission',
      'userCalendarPermission' => 'User Calendar Permission',
      'data' => 'Данные',
      'fieldData' => 'Полевые данные'
    ],
    'links' => [
      'users' => 'Пользователи',
      'teams' => 'Группы'
    ],
    'tooltips' => [
      'messagePermission' => 'Позволяет отправлять сообщения другим пользователям.

* all - отправка всем
* team - можно отправлять сообщения только членам команды
* нет - нельзя отправлять',
      'assignmentPermission' => 'Позволяет назначать записи другим пользователям.

* all - без ограничений
* team - можно назначать только членам команды
* нет - можно назначать только себе',
      'userPermission' => 'Allows to view stream of other users. Allows users to view the access levels other users have for specific records.',
      'userCalendarPermission' => 'Allows to view calendars of other users.',
      'portalPermission' => 'Доступ к информации портала, возможность размещения сообщений для пользователей портала.',
      'groupEmailAccountPermission' => 'Доступ к групповым почтовым ящикам, возможность отправки писем с группового SMTP.',
      'exportPermission' => 'Позволяет экспортировать записи.',
      'massUpdatePermission' => 'Возможность выполнять массовое обновление записей.',
      'followerManagementPermission' => 'Позволяет управлять последователями конкретных записей.',
      'dataPrivacyPermission' => 'Позволяет просматривать и стирать личные данные.',
      'auditPermission' => 'Allows to view the audit log.',
      'mentionPermission' => 'Allows to mention other users in the Stream.

* all – can mention all
* team – can mention only teammates
* no – cannot mention'
    ],
    'labels' => [
      'Access' => 'Доступ',
      'Create Role' => 'Создать роль',
      'Scope Level' => 'Область видемости',
      'Field Level' => 'Поле видемости',
      'Baseline' => 'Baseline'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'не установлено',
        'enabled' => 'включено',
        'disabled' => 'отключено'
      ],
      'levelList' => [
        'all' => 'все',
        'team' => 'группа',
        'account' => 'контрагент',
        'contact' => 'контакт',
        'own' => 'владелец',
        'no' => 'нет',
        'yes' => 'да',
        'not-set' => 'не установлено'
      ]
    ],
    'actions' => [
      'read' => 'Чтение',
      'edit' => 'Редактирование',
      'delete' => 'Удаление',
      'stream' => 'Лента',
      'create' => 'Создать'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Все изменения применятся только после очистки кэша.'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Название',
      'status' => 'Статус',
      'job' => 'Задание',
      'scheduling' => 'Планирование'
    ],
    'links' => [
      'log' => 'Журнал'
    ],
    'labels' => [
      'As often as possible' => 'Как можно чаще',
      'Create ScheduledJob' => 'Создать задание'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Очистка',
        'CheckInboundEmails' => 'Проверка входящей эл. почты групп',
        'CheckEmailAccounts' => 'Проверка входящей эл. почты пользователей',
        'SendEmailReminders' => 'Отправка напоминаний по эл. почте',
        'AuthTokenControl' => 'Контроль за токенами аутентификации',
        'SendEmailNotifications' => 'Отправить оповещения на эл. почту',
        'CheckNewVersion' => 'Проверить наличие новой версии',
        'ProcessWebhookQueue' => 'Обработка Webhook очереди',
        'SendScheduledEmails' => 'Send Scheduled Emails',
        'ProcessMassEmail' => 'Отправка массовых рассылок эл. писем',
        'ControlKnowledgeBaseArticleStatus' => 'Контроль статуса статей базы знаний'
      ],
      'cronSetup' => [
        'linux' => 'Заметка: Добавьте эту строку в crontab для запуска планировщика заданий Espo:',
        'mac' => 'Заметка: Добавьте эту строку в crontab для запуска планировщика заданий Espo:',
        'windows' => 'Заметка: Создайте пакетный файл со следующими командами для запуска планировщика заданий Espo используя планировщик заданий Windows:',
        'default' => 'Заметка: Добавьте эту команду в Cron (Планировщик заданий):'
      ],
      'status' => [
        'Active' => 'Активно',
        'Inactive' => 'Неактивно'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Обозначение таблицы планировщика (Crontab). Определяет частоту выполнения задания.

`* / 5 * * * *` - каждые 5 минут

`0 * / 2 * * *` - каждые 2 часа

`30 1 * * *` - в 01:30 1 раз в сутки

`0 0 1 * *` - в первый день месяца'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Статус',
      'executionTime' => 'Время запуска',
      'target' => 'Цель'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Использовать кэш',
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Тысячный разделитель',
      'decimalMark' => 'Десятичный разделитель',
      'defaultCurrency' => 'Валюта по умолчанию',
      'baseCurrency' => 'Базовая валюта',
      'currencyRates' => 'Курсы обмена',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'companyLogo' => 'Логотип компании',
      'smsProvider' => 'SMS-провайдер',
      'outboundSmsFromNumber' => 'SMS с номера',
      'emailAddress' => 'Адрес эл. почты',
      'outboundEmailFromName' => 'Имя отправителя',
      'outboundEmailFromAddress' => 'System Email Address',
      'outboundEmailIsShared' => 'Может использоваться всеми пользователями',
      'emailAddressLookupEntityTypeList' => 'Области поиска адреса электронной почты',
      'emailAddressSelectEntityTypeList' => 'Email address select scopes',
      'recordsPerPage' => 'Записей на страницу',
      'recordsPerPageSmall' => 'Записей на страницу (сжатый вид)',
      'recordsPerPageSelect' => 'Записи на страницу (Выбрать)',
      'recordsPerPageKanban' => 'Записей на странице (канбан)',
      'tabList' => 'Список вкладок',
      'quickCreateList' => 'Список для быстрого создания',
      'exportDelimiter' => 'Разделитель полей при экспорте',
      'globalSearchEntityList' => 'Список объектов глобального поиска',
      'authenticationMethod' => 'Метод аутентификации',
      'ldapHost' => 'Сервер',
      'ldapPort' => 'Порт',
      'ldapAuth' => 'Аутентификация',
      'ldapUsername' => 'Имя пользователя',
      'ldapPassword' => 'Пароль',
      'ldapBindRequiresDn' => 'Привязка по домену',
      'ldapBaseDn' => 'Базовый домен',
      'ldapAccountCanonicalForm' => 'Стандартная учетная запись',
      'ldapAccountDomainName' => 'Доменное имя учетной записи',
      'ldapTryUsernameSplit' => 'Попробовать отделить имя пользователя',
      'ldapPortalUserLdapAuth' => 'Использовать аутентификацию LDAP для пользователей портала',
      'ldapCreateEspoUser' => 'Создать пользователя в EspoCRM',
      'ldapSecurity' => 'Безопасность',
      'ldapUserLoginFilter' => 'Фильтр логина пользователя',
      'ldapAccountDomainNameShort' => 'Сокращенное доменное имя учетной записи',
      'ldapOptReferrals' => 'Оптовые рефералы',
      'ldapUserNameAttribute' => 'Атрибут имени пользователя (username)',
      'ldapUserObjectClass' => 'Пользовательский объектный класс',
      'ldapUserTitleAttribute' => 'Атрибут должности пользователя',
      'ldapUserFirstNameAttribute' => 'Атрибут имени пользователя',
      'ldapUserLastNameAttribute' => 'Атрибут фамилии пользователя',
      'ldapUserEmailAddressAttribute' => 'Атрибут адреса эл. почты пользователя',
      'ldapUserTeams' => 'Группы пользователя',
      'ldapUserDefaultTeam' => 'Группа пользователя по умолчанию',
      'ldapUserPhoneNumberAttribute' => 'Атрибут номера телефона пользователя',
      'ldapPortalUserPortals' => 'Порталы по умолчанию для пользователя портала',
      'ldapPortalUserRoles' => 'Роли по умолчанию для пользователя портала',
      'exportDisabled' => 'Отключение возможности экпортирования (будет доступно только администратору)',
      'assignmentNotificationsEntityList' => 'Объекты для оповещения при назначении',
      'assignmentEmailNotifications' => 'Оповещать по эл. почте при назначении',
      'assignmentEmailNotificationsEntityList' => 'Объекты для оповещения по эл. почте при назначении',
      'streamEmailNotifications' => 'Уведомления об обновлениях в ленте для внутренних пользователей',
      'portalStreamEmailNotifications' => 'Уведомления об обновлениях в ленте для пользователей портала',
      'streamEmailNotificationsEntityList' => 'Уведомление на эл. почту при изменении в лентах',
      'streamEmailNotificationsTypeList' => 'О чем уведомлять',
      'streamEmailWithContentEntityTypeList' => 'Entities with email body in stream notes',
      'emailNotificationsDelay' => 'Задержка уведомлений по эл. почте (в секундах)',
      'b2cMode' => 'Режим B2C',
      'avatarsDisabled' => 'Отключить использование аватар',
      'followCreatedEntities' => 'Подписываться на создаваемые объекты',
      'displayListViewRecordCount' => 'Показывать общее количество (при отображении в виде списка)',
      'theme' => 'Тема',
      'userThemesDisabled' => 'Отключить использование пользовательских тем',
      'attachmentUploadMaxSize' => 'Максимальный размер загрузки (Мб)',
      'attachmentUploadChunkSize' => 'Размер загружаемого фрагмента (Мб)',
      'emailMessageMaxSize' => 'Максимальный размер эл. письма (в Мб)',
      'massEmailMaxPerHourCount' => 'Максимальное число отсылаемых в час эл. писем',
      'massEmailMaxPerBatchCount' => 'Max number of emails sent per batch',
      'personalEmailMaxPortionSize' => 'Максимальный размер части эл. почты для извлечения личной учетной записи',
      'inboundEmailMaxPortionSize' => 'Максимальный размер части эл. почты для выборки учетных записей групп',
      'maxEmailAccountCount' => 'Максимальное число персональных учетных записей эл. почты для пользователя',
      'emailScheduledBatchCount' => 'Max number of scheduled emails sent per batch',
      'authTokenLifetime' => 'Время жизни токена аутентификации (в часах)',
      'authTokenMaxIdleTime' => 'Максимальный срок простоя токена аутентификации (в часах)',
      'dashboardLayout' => 'Планировка панели виджетов (по умолчанию)',
      'siteUrl' => 'URL адрес сайта',
      'addressPreview' => 'Просмотр формата адреса',
      'addressFormat' => 'Формат адреса',
      'personNameFormat' => 'Формат личных имен',
      'notificationSoundsDisabled' => 'Отключить звуковые напоминания',
      'newNotificationCountInTitle' => 'Показать новый номер уведомления в заголовке страницы',
      'applicationName' => 'Название приложения',
      'calendarEntityList' => 'Список объектов календаря',
      'busyRangesEntityList' => 'Список свободных / занятых объектов',
      'mentionEmailNotifications' => 'Отправить уведомления по эл. почте об упоминаниях в сообщениях',
      'massEmailDisableMandatoryOptOutLink' => 'Необязательное использование opt-out link',
      'massEmailOpenTracking' => 'Отслеживание открытия эл. писем',
      'massEmailVerp' => 'Использовать метод VERP',
      'activitiesEntityList' => 'Список объектов действий',
      'historyEntityList' => 'Список объектов истории',
      'currencyFormat' => 'Формат валюты',
      'currencyDecimalPlaces' => 'Знаки после десятичной запятой',
      'aclAllowDeleteCreated' => 'Разрешить удаление созданных записей',
      'adminNotifications' => 'Системные уведомления на панели администрирования',
      'adminNotificationsNewVersion' => 'Показывать уведомление, когда доступна новая версия EspoCRM',
      'adminNotificationsNewExtensionVersion' => 'Показывать уведомления, когда доступны новые версии расширений',
      'textFilterUseContainsForVarchar' => 'Использовать оператор \'содержит\' при фильтрации полей varchar',
      'phoneNumberNumericSearch' => 'Numeric phone number search',
      'phoneNumberInternational' => 'International phone numbers',
      'phoneNumberExtensions' => 'Phone number extensions',
      'phoneNumberPreferredCountryList' => 'Preferred telephone country codes',
      'authTokenPreventConcurrent' => 'Только один токен аутентификации для каждого пользователя',
      'scopeColorsDisabled' => 'Отключить цвета границ',
      'tabColorsDisabled' => 'Отключить цвета вкладок',
      'tabIconsDisabled' => 'Отключить значки вкладок',
      'emailAddressIsOptedOutByDefault' => 'Отметить новые адреса эл. почты как те, которые не принимают участия в эл. рассылке',
      'outboundEmailBccAddress' => 'BCC Адрес для внешних клиентов',
      'cleanupDeletedRecords' => 'Очистить удаленные записи',
      'addressCityList' => 'Список автозаполнения городов',
      'addressStateList' => 'Список автозаполнения регионов',
      'fiscalYearShift' => 'Начало фискального года',
      'jobRunInParallel' => 'Задания выполняются параллельно',
      'jobMaxPortion' => 'Максимальная порция заданий',
      'jobPoolConcurrencyNumber' => 'Количество одновременно запущенных заданий',
      'jobForceUtc' => 'Force UTC Time Zone',
      'daemonInterval' => 'Интервал Daemon',
      'daemonMaxProcessNumber' => 'Максимальное количество процессов Daemon',
      'daemonProcessTimeout' => 'Тайм-аут процесса Daemon',
      'cronDisabled' => 'Отключить Cron',
      'maintenanceMode' => 'Режим обслуживания',
      'useWebSocket' => 'Использовать WebSocket',
      'passwordRecoveryDisabled' => 'Отключить восстановление пароля',
      'passwordRecoveryForAdminDisabled' => 'Отключить восстановление пароля для администраторов',
      'passwordRecoveryForInternalUsersDisabled' => 'Отключить восстановление пароля для внутренних пользователей',
      'passwordRecoveryNoExposure' => 'Предотвращение раскрытия адреса электронной почты в форме восстановления пароля',
      'passwordGenerateLength' => 'Длина сгенерированных паролей',
      'passwordStrengthLength' => 'Минимальная длина пароля',
      'passwordStrengthLetterCount' => 'Необходимое количество букв в пароле',
      'passwordStrengthNumberCount' => 'Необходимое количество цифр в пароле',
      'passwordStrengthBothCases' => 'Пароль должен содержать буквы как верхнего, так и нижнего регистра',
      'passwordStrengthSpecialCharacterCount' => 'Number of special character required in password',
      'auth2FA' => 'Включить двухфакторную аутентификацию',
      'auth2FAForced' => 'Заставьте обычных пользователей настроить двухфакторную аутентификацию (2FA)',
      'auth2FAMethodList' => 'Доступные методы 2FA',
      'auth2FAInPortal' => 'Разрешить 2FA на порталах',
      'workingTimeCalendar' => 'Календарь рабочего времени',
      'oidcClientId' => 'Идентификатор клиента OIDC',
      'oidcClientSecret' => 'Секрет клиента OIDC',
      'oidcAuthorizationRedirectUri' => 'URI перенаправления авторизации OIDC',
      'oidcAuthorizationEndpoint' => 'Конечная точка авторизации OIDC',
      'oidcTokenEndpoint' => 'OIDC Token Endpoint',
      'oidcUserInfoEndpoint' => 'OIDC UserInfo Endpoint',
      'oidcJwksEndpoint' => 'Конечная точка набора веб-ключей OIDC JSON',
      'oidcJwtSignatureAlgorithmList' => 'Разрешенные алгоритмы подписи OIDC JWT',
      'oidcScopes' => 'Сферы деятельности OIDC',
      'oidcGroupClaim' => 'Претензия группы OIDC',
      'oidcCreateUser' => 'OIDC Создать пользователя',
      'oidcUsernameClaim' => 'Имя пользователя OIDC Претензия',
      'oidcTeams' => 'Команды OIDC',
      'oidcSync' => 'OIDC Sync',
      'oidcSyncTeams' => 'OIDC Sync Teams',
      'oidcFallback' => 'Вход в систему резервного копирования OIDC',
      'oidcAllowRegularUserFallback' => 'OIDC Разрешить запасной вход для обычных пользователей',
      'oidcAllowAdminUser' => 'OIDC Разрешить вход в OIDC для пользователей-администраторов',
      'oidcLogoutUrl' => 'URL-адрес выхода из системы OIDC',
      'oidcAuthorizationPrompt' => 'OIDC Authorization Prompt',
      'pdfEngine' => 'PDF-движок',
      'quickSearchFullTextAppendWildcard' => 'Append wildcard in quick search',
      'authIpAddressCheck' => 'Restrict access by IP address',
      'authIpAddressWhitelist' => 'IP Address Whitelist',
      'authIpAddressCheckExcludedUsers' => 'Users excluded from check',
      'availableReactions' => 'Available Reactions',
      'baselineRole' => 'Baseline Role'
    ],
    'options' => [
      'authenticationMethod' => [
        'Oidc' => 'OIDC'
      ],
      'currencyFormat' => [
        1 => '10 USD формат валюты',
        2 => '$10 - формат валюты',
        3 => '10 $ - формат валюты'
      ],
      'personNameFormat' => [
        'firstLast' => 'Имя Фамилия',
        'lastFirst' => 'Фамилия Имя',
        'firstMiddleLast' => 'Имя Отчество Фамилия',
        'lastFirstMiddle' => 'Фамилия Имя Отчество'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Сообщения',
        'Status' => 'Обновления статуса',
        'EmailReceived' => 'Полученные эл. письма'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'Электронная почта',
        'Sms' => 'SMS'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'tooltips' => [
      'authIpAddressCheckExcludedUsers' => 'Users that will be able to log in regardless whether their IP address is in the whitelist.',
      'authIpAddressWhitelist' => 'A list of IP addresses or ranges in CIDR notation.

Portals are not affected by restriction.',
      'workingTimeCalendar' => 'Календарь рабочего времени, который будет применяться ко всем пользователям по умолчанию.',
      'displayListViewRecordCount' => 'Общее количество записей будет показано в виде списка.',
      'currencyList' => 'Какие валюты будут доступны в системе.',
      'activitiesEntityList' => 'Какие записи будут доступны на панели «Действия».',
      'historyEntityList' => 'Какие записи будут доступны в панели "Истории".',
      'calendarEntityList' => 'Какие записи будут доступны в панели "Календарь".',
      'addressStateList' => 'Укажите предложения для полей адреса.',
      'addressCityList' => 'Предложения городов для адресных полей.',
      'addressCountryList' => 'Предложения страны для полей адреса.',
      'exportDisabled' => 'Пользователи не смогут экспортировать записи. Разрешено только администратору.',
      'globalSearchEntityList' => 'Какие записи можно искать с помощью глобального поиска.',
      'siteUrl' => 'URL-адрес этого экземпляра EspoCRM. Вам нужно будет изменить его, если вы перейдете на другой домен.',
      'useCache' => 'Не рекомендуется отключать, если только для целей разработки.',
      'useWebSocket' => 'WebSocket обеспечивает двустороннюю интерактивную связь между сервером и браузером. Требуется установка программы WebSocket на вашем сервере. Дополнительную информацию см. В документации.',
      'passwordRecoveryForInternalUsersDisabled' => 'Только пользователи портала смогут восстановить пароль.',
      'passwordRecoveryNoExposure' => 'Невозможно определить, зарегистрирован ли в системе конкретный адрес электронной почты.',
      'emailAddressLookupEntityTypeList' => 'Для автозаполнения адреса электронной почты.',
      'emailAddressSelectEntityTypeList' => 'Entity types available when searching for an email address from a modal.',
      'emailNotificationsDelay' => 'Сообщение может быть отредактировано в течение указанного периода времени до отправки уведомления.',
      'outboundEmailFromAddress' => 'System emails will be sent from this email address. A [group email account](#InboundEmail) with the same email address must be set up and properly configured to send emails.',
      'busyRangesEntityList' => 'Что будет учитываться при отображении диапазонов занятости в планировщике и на временной шкале.',
      'massEmailVerp' => 'Путь возврата почты. Для лучшей обработки отклоненных сообщений. Убедитесь, что ваш провайдер поддерживает протокол 
(SMTP).',
      'recordsPerPage' => 'Число изначально отображаемых записей в виде списка',
      'recordsPerPageSmall' => 'Число записей в связанных панелях.',
      'recordsPerPageSelect' => 'Количество записей, первоначально отображаемых при выборе записей.',
      'recordsPerPageKanban' => 'Количество записей, изначально отображаемых в столбцах канбана.',
      'outboundEmailIsShared' => 'Разрешить пользователям отправлять эл. письма через этот SMTP.',
      'followCreatedEntities' => 'Пользователи будут автоматически подписаны на создаваемые ими записи.',
      'emailMessageMaxSize' => 'Все входящие эл. письма, размер которых превышает заданный, будут пропущены.',
      'authTokenLifetime' => 'Определяет сколько времени могут существовать токены.
0 - без ограничений.',
      'authTokenMaxIdleTime' => 'Определяет как долго с момента последнего подключения могут существовать токены.
0 - без ограничений.',
      'userThemesDisabled' => 'Если отмечено, то пользователи не смогут выбрать другую тему.',
      'ldapUsername' => 'Имя пользователя системы, которое позволяет искать других пользователей. Например. "CN = LDAP System User, OU = users, OU = espocrm, DC = test, DC = lan".',
      'ldapPassword' => 'Пароль для доступа к серверу LDAP.',
      'ldapAuth' => 'Учетные данные для доступа к серверу LDAP.',
      'ldapUserNameAttribute' => 'Атрибут для идентификации пользователя.
Например. "userPrincipalName" или "sAMAccountName" для сервера  OpenLDAP',
      'ldapUserObjectClass' => 'Атрибут ObjectClass для поиска пользователей. Например: "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Тип канонической формы вашей учетной записи. Есть 4 варианта:

- \'Dn\' - форма в формате \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - форма \'tester\'.

- \'Backslash\' - форма \'COMPANY\\tester\'.

- \'Principal\' - форма \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Опция форматирования имени пользователя в форме DN.',
      'ldapBaseDn' => 'Базовый DN по умолчанию, используемый для поиска пользователей. Например: "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Возможность разделения имени пользователя с доменом.',
      'ldapOptReferrals' => 'если отсылки должны выполняться клиенту LDAP.',
      'ldapPortalUserLdapAuth' => 'Разрешить пользователям портала использовать аутентификацию LDAP вместо аутентификации Espo.',
      'ldapCreateEspoUser' => 'Этот параметр позволяет EspoCRM создавать пользователя из LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP атрибут, который используется для определения имени пользователя. Например. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP атрибут, который используется для определения фамилии пользователя. Например. «sn».',
      'ldapUserTitleAttribute' => 'LDAP атрибут, который используется для определения названия пользователя. Например. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP атрибут, который используется для определения адреса электронной почты пользователя. Например. «mail»',
      'ldapUserPhoneNumberAttribute' => 'LDAP, который используется для определения номера телефона пользователя. Например. "telephoneNumber".',
      'ldapUserLoginFilter' => 'Фильтр, который позволяет ограничить пользователей, которые могут использовать EspoCRM. Например: "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Домен, который используется для авторизации на сервере LDAP.',
      'ldapAccountDomainNameShort' => 'Короткий домен, который используется для авторизации на сервере LDAP.',
      'ldapUserTeams' => 'Команды для созданного пользователя. Подробнее см. в профиле пользователя.',
      'ldapUserDefaultTeam' => 'Группа по умолчанию для созданного пользователя. Подробнее см. в профиле пользователя.',
      'ldapPortalUserPortals' => 'Порталы по умолчанию для созданного пользователя портала',
      'ldapPortalUserRoles' => 'Роли по умолчанию для созданного пользователя портала',
      'b2cMode' => 'По умолчанию EspoCRM адаптирован для B2B. Вы можете переключить его на B2C.',
      'currencyDecimalPlaces' => 'Количество знаков после десятичной запятой. Если пусто, будут отображаться все непустые десятичные знаки.',
      'aclStrictMode' => 'Включено: доступ к областям действий запрещен, если он не указан в ролях.

Отключено: доступ к областям действий разрешен, если он не указан в ролях.',
      'aclAllowDeleteCreated' => 'Пользователи смогут удалять записи, созданные ими, даже если у них нет доступа к удалению.',
      'textFilterUseContainsForVarchar' => 'Если не отмечено, используется оператор «начинается с». Вы можете использовать специальный символ \'%\'.',
      'streamEmailNotificationsEntityList' => 'Электронные уведомления о новых событиях в Ленте записей, которые отслеживаются. Пользователи будут получать оповещения по электронной почте только для указанных типов объектов.',
      'authTokenPreventConcurrent' => 'Пользователи не смогут войти в систему с нескольких устройств одновременно.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email address will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Удаленные записи будут стерты из базы данных через некоторое время.',
      'jobRunInParallel' => 'Задания будут выполняться в параллельных процессах.',
      'jobPoolConcurrencyNumber' => 'Максимальное количество процессов, запущенных одновременно.',
      'jobMaxPortion' => 'Максимальное количество обработанных заданий за одно выполнение.',
      'jobForceUtc' => 'Use the UTC time zone for scheduled jobs. Otherwise, the time zone set in settings will be used.',
      'daemonInterval' => 'Интервал между процессами выполняемыми cron в секундах.',
      'daemonMaxProcessNumber' => 'Максимальное количество процессов cron, запущенных одновременно.',
      'daemonProcessTimeout' => 'Максимальное время выполнения (в секундах), выделенное для одного процесса cron.',
      'cronDisabled' => 'Cron не будет работать.',
      'maintenanceMode' => 'Только администраторы будут иметь доступ к системе.',
      'oidcGroupClaim' => 'A claim to use for team mapping.',
      'oidcFallback' => 'Разрешить вход в систему по имени пользователя/паролю.',
      'oidcCreateUser' => 'Создание нового пользователя в Espo, если подходящий пользователь не найден.',
      'oidcSync' => 'Синхронизация данных пользователя (при каждом входе в систему).',
      'oidcSyncTeams' => 'Синхронизация команд пользователей (при каждом входе в систему).',
      'oidcUsernameClaim' => 'Утверждение, используемое для имени пользователя (для подбора и создания пользователя).',
      'oidcTeams' => 'Команды Espo сопоставляются с группами/командами/ролями поставщика идентификационных данных. Команды с пустым значением сопоставления всегда будут назначаться пользователю (при создании или синхронизации).',
      'oidcLogoutUrl' => 'URL-адрес, на который браузер будет перенаправляться после выхода из Espo. Предназначен для очистки информации о сессии в браузере и выполнения выхода из системы на стороне провайдера. Обычно URL содержит параметр redirect-URL для возврата обратно в Espo.

Доступные заполнители:
* `{siteUrl}`
* `{clientId}`.',
      'quickSearchFullTextAppendWildcard' => 'Append a wildcard to an autocomplete search query when Full-Text search is enabled. Reduces search performance.',
      'baselineRole' => 'The default role applied to all users. Any additional roles assigned to a user grant permissions on top of this baseline.

**Important**. Changing this role affects all users – review the change carefully to avoid granting unintended permissions.'
    ],
    'labels' => [
      'Group Tab' => 'Вкладка группа',
      'Divider' => 'Разделитель',
      'System' => 'Система',
      'Locale' => 'Локаль',
      'Search' => 'Поиск',
      'Misc' => 'Разное',
      'SMTP' => 'SMTP протокол передачи эл.почты',
      'General' => 'Общие сведения',
      'Phone Numbers' => 'Phone Numbers',
      'Navbar' => 'Navbar',
      'Dashboard' => 'Приборная панель',
      'Configuration' => 'Конфигурация',
      'In-app Notifications' => 'Оповещения в приложении',
      'Email Notifications' => 'Оповещения по эл. почте',
      'Currency Settings' => 'Настройки валют',
      'Currency Rates' => 'Курсы обмена валют',
      'Mass Email' => 'Массовая рассылка эл. писем',
      'Scheduled Send' => 'Scheduled Send',
      'Test Connection' => 'Проверка соединения',
      'Connecting' => 'Подключение...',
      'Activities' => 'Деятельность',
      'Admin Notifications' => 'Уведомления админа',
      'Passwords' => 'Пароли',
      '2-Factor Authentication' => 'Двухфакторная аутентификация',
      'Attachments' => 'Вложения',
      'IdP Group' => 'IdP Group',
      'Access' => 'Access',
      'Strength' => 'Strength',
      'Recovery' => 'Recovery'
    ],
    'messages' => [
      'ldapTestConnection' => 'Соединение успешно установлено.',
      'confirmBaselineRoleChange' => 'Are you sure you want to change the baseline role? An unconsidered change may grant unintended permissions to all users.'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Введите **@username**, чтобы упомянуть пользователя в сообщении.',
      'infoSyntax' => 'Доступный синтаксис markdown',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Не удалось добавить пользователя \'{userName}\' к подписчикам. Пользователь не имеет доступа к \'потоку\' записи.'
    ],
    'syntaxItems' => [
      'code' => 'код',
      'multilineCode' => 'многострочный код',
      'strongText' => 'жирный текст',
      'emphasizedText' => 'курсивный текст',
      'deletedText' => 'зачеркнутый текст',
      'blockquote' => 'цитата',
      'link' => 'link text'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Название',
      'roles' => 'Роли',
      'layoutSet' => 'Набор макетов',
      'workingTimeCalendar' => 'Календарь рабочего времени',
      'positionList' => 'Список должностей',
      'userRole' => 'User Role'
    ],
    'links' => [
      'users' => 'Пользователи',
      'notes' => 'Заметки',
      'roles' => 'Роли',
      'layoutSet' => 'Набор макетов',
      'workingTimeCalendar' => 'Календарь рабочего времени',
      'inboundEmails' => 'Учетные записи эл. почты групп',
      'groupEmailFolders' => 'Групповые папки эл. почты'
    ],
    'tooltips' => [
      'workingTimeCalendar' => 'Календарь будет применяться к пользователям, у которых эта команда установлена как команда по умолчанию.',
      'layoutSet' => 'Предоставляет возможность иметь макеты, отличные от стандартных. Набор макетов будет применяться к пользователям, у которых эта группа установлена как группа по умолчанию.',
      'roles' => 'Роли доступа. Пользователи этой группы получают права доступа исходя из выбранных ролей.',
      'positionList' => 'Имеющиеся в этой группе должности. Например продавец, менеджер.'
    ],
    'labels' => [
      'Create Team' => 'Создать группу'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Название',
      'body' => 'Тело',
      'entityType' => 'Тип объекта',
      'header' => 'Шапка',
      'footer' => 'Подвал',
      'leftMargin' => 'Левый отступ',
      'topMargin' => 'Верхний отступ',
      'rightMargin' => 'Правый отступ',
      'bottomMargin' => 'Нижний отступ',
      'printFooter' => 'Отображать колонтитул?',
      'printHeader' => 'Печатный заголовок',
      'footerPosition' => 'Положение колонтитула',
      'headerPosition' => 'Положение заголовка',
      'variables' => 'Доступные заполнители',
      'pageOrientation' => 'Ориентация страницы',
      'pageFormat' => 'Формат бумаги',
      'pageWidth' => 'Ширина страницы (мм)',
      'pageHeight' => 'Высота страницы (мм)',
      'fontFace' => 'Шрифт',
      'title' => 'Название',
      'style' => 'Style',
      'status' => 'Status'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Создать шаблон'
    ],
    'options' => [
      'status' => [
        'Active' => 'Active',
        'Inactive' => 'Inactive'
      ],
      'pageOrientation' => [
        'Portrait' => 'Книжная',
        'Landscape' => 'Альбомная'
      ],
      'pageFormat' => [
        'Custom' => 'Пользовательский'
      ],
      'placeholders' => [
        'pagebreak' => 'Разрыв страницы',
        'today' => 'Сегодня (дата)',
        'now' => 'Теперь (дата-время)'
      ],
      'fontFace' => []
    ],
    'tooltips' => [
      'footer' => 'Используйте {pageNumber} для отображения номера страницы.',
      'variables' => 'Копировать-вставить нужный заполнитель для заголовка, тела или нижнего колонтитула.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Имя',
      'userName' => 'Имя пользователя',
      'title' => 'Должность',
      'type' => 'Тип',
      'isAdmin' => 'Права администратора',
      'defaultTeam' => 'Группа по умолчанию',
      'emailAddress' => 'Эл. почта',
      'phoneNumber' => 'Телефон',
      'roles' => 'Роли',
      'portals' => 'Порталы',
      'portalRoles' => 'Роли порталов',
      'teamRole' => 'Должность (положение в группе)',
      'password' => 'Пароль',
      'currentPassword' => 'Текущий пароль',
      'passwordConfirm' => 'Подтвердить пароль',
      'newPassword' => 'Новый пароль',
      'newPasswordConfirm' => 'Подтвердить новый пароль',
      'yourPassword' => 'Ваш текущий пароль',
      'avatar' => 'Аватар',
      'avatarColor' => 'Avatar Color',
      'isActive' => 'Активен',
      'isPortalUser' => 'Пользователь портала',
      'contact' => 'Контакты',
      'accounts' => 'Контрагенты',
      'account' => 'Контрагент',
      'sendAccessInfo' => 'Отправить пользователю эл. письмо с реквизитами доступа',
      'portal' => 'Портал',
      'gender' => 'Пол',
      'position' => 'Должность в группе',
      'ipAddress' => 'IP адрес',
      'passwordPreview' => 'Предпросмотр пароля',
      'isSuperAdmin' => 'Главный администратор',
      'lastAccess' => 'Последнее подключение',
      'apiKey' => 'Ключ API',
      'secretKey' => 'Секретный ключ',
      'dashboardTemplate' => 'Шаблон панели виджетов',
      'workingTimeCalendar' => 'Календарь рабочего времени',
      'auth2FA' => 'Двухфакторная аутентификация (2FA)',
      'authMethod' => 'Метод аутентификации',
      'auth2FAEnable' => 'Включить двухфакторную аутентификацию',
      'auth2FAMethod' => 'Метод 2FA',
      'auth2FATotpSecret' => '2FA TOTP Секрет',
      'layoutSet' => 'Комплект макетов',
      'acceptanceStatus' => 'Статус принятия',
      'acceptanceStatusMeetings' => 'Статус принятия (Встречи)',
      'acceptanceStatusCalls' => 'Статус принятия (Звонки)'
    ],
    'links' => [
      'defaultTeam' => 'Группа по умолчанию',
      'teams' => 'Группы',
      'roles' => 'Роли',
      'notes' => 'Заметки',
      'portals' => 'Порталы',
      'portalRoles' => 'Роли порталов',
      'contact' => 'Контакт',
      'accounts' => 'Контрагенты',
      'account' => 'Учетная запись (Основная)',
      'tasks' => 'Задачи',
      'userData' => 'Данные пользователя',
      'dashboardTemplate' => 'Шаблон панели виджетов',
      'workingTimeCalendar' => 'Календарь рабочего времени',
      'workingTimeRanges' => 'Working Time Exceptions',
      'layoutSet' => 'Комплект макетов',
      'targetLists' => 'Списки целей'
    ],
    'labels' => [
      'Create User' => 'Создать пользователя',
      'Generate' => 'Сгенерировать',
      'Access' => 'Доступ',
      'Preferences' => 'Персональные Настройки',
      'Change Password' => 'Изменить пароль',
      'Teams and Access Control' => 'Группы и уровень доступа',
      'Forgot Password?' => 'Забыли пароль?',
      'Password Change Request' => 'Запрос смены пароля',
      'Email Address' => 'Адрес эл. почты',
      'External Accounts' => 'Внешние учетные записи',
      'Email Accounts' => 'Учетные записи эл. почты',
      'Portal' => 'Портал',
      'Create Portal User' => 'Создать пользователя портала',
      'Proceed w/o Contact' => 'Продолжить без контакта',
      'Generate New API Key' => 'Сгенерировать новый ключ API',
      'Generate New Password' => 'Сгенерировать новый пароль',
      'Send Password Change Link' => 'Отправить ссылку для изменения пароля',
      'Back to login form' => 'Вернуться к форме входа',
      'Requirements' => 'Требования',
      'Security' => 'Безопасность',
      'Reset 2FA' => 'Сбросить 2FA',
      'Code' => 'Код',
      'Secret' => 'Секрет',
      'Send Code' => 'Отправить код',
      'Login Link' => 'Ссылка для входа'
    ],
    'tooltips' => [
      'defaultTeam' => 'Все записи, созданные этим пользователем, по умолчанию будут относиться к этой группе.',
      'userName' => 'Допускаются латинские буквы a-z, цифры 0-9, точки, дефисы, символы @ и подчеркивания.',
      'isAdmin' => 'Пользователь с правами администратора может получить доступ ко всему.',
      'isActive' => 'Если флажок не установлен, то пользователь не сможет войти в систему.',
      'teams' => 'Группы к которым принадлежит данный пользователь. Уровень доступа наследуется от ролей группы.',
      'roles' => 'Дополнительные роли доступа. Используйте это если пользователь не принадлежит ни к одной группе или вам необходимо расширить уровень доступа только для этого пользователя.',
      'portalRoles' => 'Дополнительные роли портала. Используйте это если необходимо расширить уровень доступа только для этого пользователя.',
      'portals' => 'Порталы к которым имеет доступ этот пользователь.',
      'layoutSet' => 'Вместо стандартных макетов для пользователя будут применяться макеты из указанного набора.'
    ],
    'messages' => [
      '2faMethodNotConfigured' => 'The 2FA method is not fully configured in the system.',
      'loginAs' => 'Откройте ссылку для входа в систему в окне инкогнито, чтобы сохранить текущую сессию. Используйте учетные данные администратора для входа в систему.',
      'sendPasswordChangeLinkConfirmation' => 'Пользователю будет отправлено электронное письмо с уникальной ссылкой, позволяющей изменить пароль. Срок действия ссылки истекает через определенное время.',
      'passwordRecoverySentIfMatched' => 'Предполагая, что введенные данные соответствуют любой учетной записи пользователя.',
      'passwordStrengthLength' => 'Должен быть длиной не менее {length} символов.',
      'passwordStrengthLetterCount' => 'Должен содержать как минимум {count} букв.',
      'passwordStrengthNumberCount' => 'Должен содержать не менее {count} цифр.',
      'passwordStrengthSpecialCharacterCount' => 'Must contain at least {count} special character(s).',
      'passwordStrengthBothCases' => 'Должен содержать буквы как верхнего, так и нижнего регистра.',
      'passwordWillBeSent' => 'Пароль будет выслан на адрес эл. почты пользователя.',
      'passwordChanged' => 'Пароль был изменен',
      'userCantBeEmpty' => 'Имя пользователя не может быть пустым',
      'wrongUsernamePassword' => 'Неверное имя пользователя/пароль',
      'failedToLogIn' => 'Не удалось войти в систему',
      'emailAddressCantBeEmpty' => 'Адрес эл. почты не может быть пустым',
      'userNameEmailAddressNotFound' => 'Имя пользователя/Адрес эл. почты не найдены',
      'forbidden' => 'Запрещено, повторите попытку позже',
      'uniqueLinkHasBeenSent' => 'Уникальная ссылка была отправлена на указанный адрес эл. почты.',
      'passwordChangedByRequest' => 'Пароль был изменен.',
      'setupSmtpBefore' => 'Вам необходимо настроить [Настройки SMTP]({url}), чтобы система могла отправлять пароль по эл. почте.',
      'userNameExists' => 'Имя пользователя уже существует',
      'loginError' => 'Error occurred',
      'wrongCode' => 'Неверный код',
      'codeIsRequired' => 'Требуется код',
      'yourAuthenticationCode' => 'Ваш код аутентификации: {code}.',
      'choose2FaSmsPhoneNumber' => 'Выберите номер телефона, который будет использоваться для 2FA.',
      'choose2FaEmailAddress' => 'Выберите адрес электронной почты, который будет использоваться для 2FA. Настоятельно рекомендуется использовать не основной адрес электронной почты.',
      'enterCodeSentInEmail' => 'Введите код, отправленный на ваш адрес электронной почты.',
      'enterCodeSentBySms' => 'Введите код, отправленный в SMS на ваш номер телефона.',
      'enterTotpCode' => 'Введите код из вашего приложения-аутентификатора.',
      'verifyTotpCode' => 'Просканируйте QR-код с помощью вашего мобильного приложения-аутентификатора. Если у вас есть проблемы со сканированием, вы можете ввести секрет вручную. После этого вы увидите 6-значный код в вашем приложении. Введите этот код в поле ниже.',
      'generateAndSendNewPassword' => 'Новый пароль будет сгенерирован и отправлен на адрес эл. почты пользователя.',
      'security2FaResetConfirmation' => 'Вы уверены, что хотите сбросить текущие настройки 2FA?',
      'auth2FARequiredHeader' => 'Требуется двухфакторная аутентификация',
      'auth2FARequired' => 'Вам необходимо настроить двухфакторную аутентификацию. Используйте приложение-аутентификатор на своем мобильном телефоне (например, Google Authenticator).',
      'ldapUserInEspoNotFound' => 'Пользователь не найден в EspoCRM. Обратитесь к администратору, чтобы создать пользователя.',
      'passwordChangeRequestNotFound' => 'Запрос на изменение пароля не найден. Возможно, срок его действия истек. Попробуйте инициировать восстановление нового пароля со страницы [login page]({url}).',
      'defaultTeamIsNotUsers' => 'Default Team should be one of user\'s Teams'
    ],
    'options' => [
      'gender' => [
        '' => 'Не установлен',
        'Male' => 'Мужской',
        'Female' => 'Женский',
        'Neutral' => 'Нейтральный'
      ],
      'type' => [
        'regular' => 'Обычный',
        'admin' => 'Администратор',
        'portal' => 'Пользователь портала',
        'system' => 'Системный',
        'super-admin' => 'Главный администратор',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'Ключ API',
        'Hmac' => 'HMAC - криптография'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Только моя группа',
      'onlyMe' => 'OnlyMe'
    ],
    'presetFilters' => [
      'active' => 'Активные',
      'activePortal' => 'Активный портал',
      'activeApi' => 'API Активный'
    ],
    'actions' => [
      'changePosition' => 'Change Position'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Создать вебхук'
    ],
    'fields' => [
      'event' => 'Событие',
      'url' => 'URL',
      'isActive' => 'Активный',
      'user' => 'API пользователь',
      'entityType' => 'Тип объекта',
      'field' => 'Поле',
      'secretKey' => 'Секретный ключ',
      'skipOwn' => 'Skip Own'
    ],
    'links' => [
      'user' => 'Пользователь',
      'queueItems' => 'Queue Items'
    ],
    'tooltips' => [
      'skipOwn' => 'Do not send if the event was initiated by the user owning the webhook.'
    ]
  ],
  'WebhookEventQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'target' => 'Target',
      'data' => 'Data',
      'isProcessed' => 'Is Processed',
      'user' => 'User'
    ],
    'links' => [
      'target' => 'Target',
      'user' => 'User'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'webhook' => 'Webhook',
      'target' => 'Target',
      'data' => 'Data',
      'status' => 'Status',
      'processedAt' => 'Processed At',
      'attempts' => 'Attempts',
      'processAt' => 'Process At'
    ],
    'links' => [
      'webhook' => 'Webhook'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ]
  ],
  'WorkingTimeCalendar' => [
    'labels' => [
      'Create WorkingTimeCalendar' => 'Создать календарь'
    ],
    'fields' => [
      'timeZone' => 'Часовой пояс',
      'timeRanges' => 'Расписание рабочего дня',
      'weekday0' => 'Солнце',
      'weekday1' => 'Пн',
      'weekday2' => 'Tue',
      'weekday3' => 'Ср.',
      'weekday4' => 'Thu',
      'weekday5' => 'Пн',
      'weekday6' => 'Сб',
      'weekday0TimeRanges' => 'Солнечное расписание',
      'weekday1TimeRanges' => 'Расписание на пн',
      'weekday2TimeRanges' => 'Расписание на вторник',
      'weekday3TimeRanges' => 'Расписание на среду',
      'weekday4TimeRanges' => 'Расписание',
      'weekday5TimeRanges' => 'Расписание на пятницу',
      'weekday6TimeRanges' => 'Расписание на субботу'
    ],
    'links' => [
      'ranges' => 'Exceptions'
    ]
  ],
  'WorkingTimeRange' => [
    'labels' => [
      'Create WorkingTimeRange' => 'Create Exception',
      'Calendars' => 'Календари'
    ],
    'fields' => [
      'timeRanges' => 'Расписание',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата Окончание',
      'type' => 'Тип',
      'calendars' => 'Календари',
      'users' => 'Пользователи'
    ],
    'links' => [
      'calendars' => 'Календари',
      'users' => 'Пользователи'
    ],
    'options' => [
      'type' => [
        'Non-working' => 'Неработающий',
        'Working' => 'Работа'
      ]
    ],
    'presetFilters' => [
      'actual' => 'Фактический'
    ],
    'tooltips' => [
      'calendars' => 'Calendars to apply the exception to. The exception will be applied to all users of selected calendars.

Leave the field empty if you need to apply the exception only for specific users.',
      'users' => 'Specific users to apply the exception to.'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'website' => 'Сайт',
      'phoneNumber' => 'Телефон',
      'billingAddress' => 'Платежный адрес',
      'shippingAddress' => 'Почтовый адрес',
      'description' => 'Описание',
      'sicCode' => 'Код SIC',
      'industry' => 'Вид деятельности',
      'type' => 'Тип',
      'contactRole' => 'Должность',
      'contactIsInactive' => 'Неактивный',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'originalLead' => 'Изначальный кандидат'
    ],
    'links' => [
      'contacts' => 'Контакты',
      'contactsPrimary' => 'Контакты (основные)',
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
      'documents' => 'Документы',
      'meetingsPrimary' => 'Встречи (развернуто)',
      'callsPrimary' => 'Звонки (развернуто)',
      'tasksPrimary' => 'Задачи (развернуто)',
      'emailsPrimary' => 'Письма (развернуто)',
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'portalUsers' => 'Пользователи портала',
      'originalLead' => 'Изначальный кандидат'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Заказчик',
        'Investor' => 'Вкладчик',
        'Partner' => 'Партнер',
        'Reseller' => 'Посредник'
      ],
      'industry' => [
        'Aerospace' => 'Аиационно-космическая',
        'Agriculture' => 'Сельское хохяйство',
        'Advertising' => 'Реклама',
        'Apparel & Accessories' => 'Одежда и аксессуары',
        'Architecture' => 'Архитектура',
        'Automotive' => 'Автомобильные',
        'Banking' => 'Банкинг',
        'Biotechnology' => 'Биотехнология',
        'Building Materials & Equipment' => 'Строительные материалы и оборудование',
        'Chemical' => 'Химия',
        'Construction' => 'Сроительство',
        'Computer' => 'Компьютеры',
        'Defense' => 'Защита',
        'Creative' => 'Творчество',
        'Culture' => 'Культура',
        'Consulting' => 'Консалтинг',
        'Education' => 'Образование',
        'Electronics' => 'Электроника',
        'Electric Power' => 'Электроэнергия',
        'Energy' => 'Энергия',
        'Entertainment & Leisure' => 'Развлечение и досуг',
        'Finance' => 'Финансы',
        'Food & Beverage' => 'Еда и напитки',
        'Grocery' => 'Бакалея',
        'Hospitality' => 'Гостеприимство',
        'Healthcare' => 'Здравоохранение',
        'Insurance' => 'Страхование',
        'Legal' => 'Право',
        'Manufacturing' => 'Производство',
        'Mass Media' => 'СМИ',
        'Mining' => 'Горная промышленность',
        'Music' => 'Музыка',
        'Marketing' => 'Маркетинг',
        'Publishing' => 'Издательство',
        'Petroleum' => 'Нефть',
        'Real Estate' => 'Недвижимость',
        'Retail' => 'Розничная торговля',
        'Shipping' => 'Доставка',
        'Service' => 'Сервис',
        'Support' => 'Служба поддержки',
        'Sports' => 'Спорт',
        'Software' => 'Программного обеспечения',
        'Technology' => 'Технологии',
        'Telecommunications' => 'Телекоммуникации',
        'Television' => 'Телевидение',
        'Testing, Inspection & Certification' => 'Тестирование, проверка и сертификация',
        'Transportation' => 'Транспорт',
        'Travel' => 'Путешествия',
        'Venture Capital' => 'Венчурный капитал',
        'Wholesale' => 'Оптовая торговля',
        'Water' => 'Вода'
      ]
    ],
    'labels' => [
      'Create Account' => 'Создать контрагента',
      'Copy Billing' => 'Копировать адрес',
      'Set Primary' => 'Установить как основной'
    ],
    'presetFilters' => [
      'customers' => 'Заказчики',
      'partners' => 'Партнеры',
      'recentlyCreated' => 'Недавно созданный'
    ],
    'tabs' => [
      'Account' => 'Account',
      'Support' => 'Support'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Месяц',
      'week' => 'Неделя',
      'day' => 'День',
      'agendaWeek' => 'Неделя',
      'agendaDay' => 'День',
      'timeline' => 'Расписание'
    ],
    'labels' => [
      'Today' => 'Сегодня',
      'Create' => 'Создать',
      'Shared' => 'Общий',
      'Add User' => 'Добавить пользователя',
      'current' => 'текущий',
      'time' => 'время',
      'User List' => 'Список пользователей',
      'View Calendar' => 'Просмотреть календарь',
      'Create Shared View' => 'Создать общий просмотр',
      'Edit Shared View' => 'Edit Shared View',
      'Shared Mode Options' => 'Shared Mode Options'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'direction' => 'Категория',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'reminders' => 'Напоминания',
      'account' => 'Контрагент',
      'acceptanceStatus' => 'Статус принятия',
      'uid' => 'UID'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Запланирован',
        'Held' => 'Состоялся',
        'Not Held' => 'Не состоялся'
      ],
      'direction' => [
        'Outbound' => 'Исходящий',
        'Inbound' => 'Входящий'
      ],
      'acceptanceStatus' => [
        'None' => 'Нет',
        'Accepted' => 'Согласен',
        'Declined' => 'Не согласен',
        'Tentative' => 'Есть сомнения'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Состоялось',
      'setNotHeld' => 'Не состоялось'
    ],
    'labels' => [
      'Create Call' => 'Создать звонок',
      'Set Held' => 'Состоялось',
      'Set Not Held' => 'Не состоялось',
      'Send Invitations' => 'Отправить приглашения'
    ],
    'presetFilters' => [
      'planned' => 'Запланированные',
      'held' => 'Завершенные',
      'todays' => 'На сегодня'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Название',
      'description' => 'Описание',
      'status' => 'Статус',
      'type' => 'Тип',
      'startDate' => 'Дата начала',
      'endDate' => 'Дата окончания',
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'sentCount' => 'Отправлено',
      'openedCount' => 'Открыто',
      'clickedCount' => 'Проследовало по ссылке',
      'optedOutCount' => 'Отписалось',
      'bouncedCount' => 'Возвратов писем',
      'optedInCount' => 'Подписан',
      'hardBouncedCount' => 'Жестких возвратов',
      'softBouncedCount' => 'Мягких возвратов',
      'leadCreatedCount' => 'Кандидатов создано',
      'revenue' => 'Доход',
      'revenueConverted' => 'Доход (сконвертированный)',
      'budget' => 'Бюджет',
      'budgetConverted' => 'Бюджет (сконвертированный)',
      'budgetCurrency' => 'Валюта бюджета',
      'contactsTemplate' => 'Шаблон контактов',
      'leadsTemplate' => 'Шаблон кандидатов',
      'accountsTemplate' => 'Шаблон контрагентов',
      'usersTemplate' => 'Шаблон пользователей',
      'mailMergeOnlyWithAddress' => 'Пропустить записи без заполненного адреса'
    ],
    'links' => [
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'accounts' => 'Контрагенты',
      'contacts' => 'Контакты',
      'leads' => 'Лид (потенциальный клиент)',
      'opportunities' => 'Сделки',
      'campaignLogRecords' => 'Журнал',
      'massEmails' => 'Массовые рассылки эл. писем',
      'trackingUrls' => 'Целевые URL-адреса',
      'contactsTemplate' => 'Шаблон контактов',
      'leadsTemplate' => 'Шаблон кандидатов',
      'accountsTemplate' => 'Шаблон контрагентов',
      'usersTemplate' => 'Шаблон пользователей'
    ],
    'options' => [
      'type' => [
        'Email' => 'Эл. письмо',
        'Informational Email' => 'Informational Email',
        'Web' => 'Интернет',
        'Television' => 'Телевидение',
        'Radio' => 'Радио',
        'Newsletter' => 'Информационный бюллетень',
        'Mail' => 'Письмо'
      ],
      'status' => [
        'Planning' => 'Запланирована',
        'Active' => 'Активна',
        'Inactive' => 'Не активна',
        'Complete' => 'Завершена'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Создать кампанию',
      'Target Lists' => 'Списки целей',
      'Statistics' => 'Статистика',
      'hard' => 'жесткий',
      'soft' => 'мягкий',
      'Unsubscribe' => 'Отписаться',
      'Mass Emails' => 'Массовые рассылки эл. писем',
      'Email Templates' => 'Шаблоны эл. писем',
      'Unsubscribe again' => 'Отписаться снова',
      'Subscribe again' => 'Подписаться снова',
      'Create Target List' => 'Создать список целей',
      'Mail Merge' => 'Слияние писем',
      'Generate Mail Merge PDF' => 'Сгенерировать PDF-слияние'
    ],
    'presetFilters' => [
      'active' => 'Активна'
    ],
    'messages' => [
      'cannotChangeType' => 'Cannot change type.',
      'unsubscribed' => 'Вы были удалены из нашего списка рассылки.',
      'subscribedAgain' => 'Вы снова подписаны.'
    ],
    'tooltips' => [
      'targetLists' => 'Цели которые должны получить сообщения.',
      'excludingTargetLists' => 'Цели которые не должны получить сообщения.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Действие',
      'actionDate' => 'Дата',
      'data' => 'Данные',
      'campaign' => 'Кампания',
      'parent' => 'Цель',
      'object' => 'Объект',
      'application' => 'Приложение',
      'queueItem' => 'Элемент очереди',
      'stringData' => 'Строка данных',
      'stringAdditionalData' => 'Строка дополнительных данных',
      'isTest' => 'Тестовый'
    ],
    'links' => [
      'queueItem' => 'Элемент очереди',
      'parent' => 'Источник',
      'object' => 'Объект',
      'campaign' => 'Кампания'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Отправлено',
        'Opened' => 'Открыто',
        'Opted Out' => 'Отписалось',
        'Bounced' => 'Возвратов писем',
        'Clicked' => 'Нажать (кликнуть)',
        'Lead Created' => 'Лидов создано',
        'Opted In' => 'Подписан'
      ]
    ],
    'labels' => [
      'All' => 'Все'
    ],
    'presetFilters' => [
      'sent' => 'Отправлено',
      'opened' => 'Открыто',
      'optedOut' => 'Отписалось',
      'optedIn' => 'Подписан',
      'bounced' => 'Возвратов писем',
      'clicked' => 'Проследовало по ссылке',
      'leadCreated' => 'Лидов создано'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'Целевой URL-адрес',
      'action' => 'Действие',
      'urlToUse' => 'Код для подстановки вместо целевого URL-адреса',
      'message' => 'Сообщение',
      'campaign' => 'Кампания'
    ],
    'links' => [
      'campaign' => 'Кампания'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Создать целевой URL-адрес'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Перенаправить',
        'Show Message' => 'Показать сообщение'
      ]
    ],
    'tooltips' => [
      'url' => 'Получатель будет перенаправлен в это место после перехода по ссылке.',
      'message' => 'Сообщение будет показано получателю после того, как он перейдет по ссылке. Язык разметки (Markdown) поддерживается.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Название',
      'number' => 'Номер',
      'status' => 'Статус',
      'account' => 'Контрагент',
      'contact' => 'Контакт',
      'contacts' => 'Контакты',
      'priority' => 'Приоритет',
      'type' => 'Тип',
      'description' => 'Описание',
      'inboundEmail' => 'Учетная запись эл. почты группы',
      'lead' => 'Лид',
      'attachments' => 'Вложения',
      'originalEmail' => 'Original Email',
      'isInternal' => 'Hidden from Portal'
    ],
    'links' => [
      'inboundEmail' => 'Учетная запись эл. почты группы',
      'account' => 'Контрагент',
      'contact' => 'Контакт (основной)',
      'Contacts' => 'Контакты',
      'meetings' => 'Встречи',
      'calls' => 'Звонки',
      'tasks' => 'Задачи',
      'emails' => 'Эл. письма',
      'articles' => 'Статьи базы знаний',
      'lead' => 'Лид',
      'attachments' => 'Вложения'
    ],
    'options' => [
      'status' => [
        'New' => 'Новое',
        'Assigned' => 'Назначено',
        'Pending' => 'В ожидании',
        'Closed' => 'Закрыто',
        'Rejected' => 'Отклонено',
        'Duplicate' => 'Дубликат'
      ],
      'priority' => [
        'Low' => 'Низкий',
        'Normal' => 'Обычный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно'
      ],
      'type' => [
        'Question' => 'Вопрос',
        'Incident' => 'Происшествие',
        'Problem' => 'Проблема'
      ]
    ],
    'labels' => [
      'Create Case' => 'Создать обращение',
      'Close' => 'Закрыть',
      'Reject' => 'Отклонить',
      'Closed' => 'Закрыто',
      'Rejected' => 'Отклонено'
    ],
    'presetFilters' => [
      'open' => 'Открытые',
      'closed' => 'Закрытые'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'title' => 'Название счета',
      'account' => 'Контрагент',
      'accounts' => 'Контрагенты',
      'phoneNumber' => 'Телефон',
      'accountType' => 'Тип контрагента',
      'doNotCall' => 'Не звонить',
      'address' => 'Адрес',
      'opportunityRole' => 'Роль в сделке',
      'accountRole' => 'Должность',
      'description' => 'Описание',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'portalUser' => 'Пользователь портала',
      'hasPortalUser' => 'Есть пользователь портала',
      'originalLead' => 'Изначальный кандидат',
      'acceptanceStatus' => 'Статус принятия',
      'accountIsInactive' => 'Неактивный контрагент',
      'acceptanceStatusMeetings' => 'Статус принятия (Встречи)',
      'acceptanceStatusCalls' => 'Статус принятия (Звонки)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'account' => 'Контрагент (основной)',
      'accounts' => 'Контрагенты',
      'casesPrimary' => 'Обращения (основной)',
      'tasksPrimary' => 'Задачи (развернуто)',
      'opportunitiesPrimary' => 'Сделки (основные)',
      'portalUser' => 'Пользователь портала',
      'originalLead' => 'Изначальный кандидат',
      'documents' => 'Документы'
    ],
    'labels' => [
      'Create Contact' => 'Создать контакт'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Принимающий решение',
        'Evaluator' => 'Оценщик',
        'Influencer' => 'Консультант'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Пользователи порталов',
      'notPortalUsers' => 'Не пользователи порталов',
      'accountActive' => 'Активный'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Создать документ',
      'Details' => 'Описание'
    ],
    'fields' => [
      'name' => 'Название',
      'status' => 'Статус',
      'file' => 'Файл',
      'type' => 'Тип',
      'publishDate' => 'Опубликован',
      'expirationDate' => 'Актуален до',
      'description' => 'Описание',
      'accounts' => 'Контрагенты',
      'folder' => 'Папка'
    ],
    'links' => [
      'accounts' => 'Контрагенты',
      'opportunities' => 'Сделки',
      'folder' => 'Папка',
      'leads' => 'Лиды',
      'contacts' => 'Контакты'
    ],
    'options' => [
      'status' => [
        'Active' => 'Действующий',
        'Draft' => 'Черновик',
        'Expired' => 'Просрочен',
        'Canceled' => 'Отменен'
      ],
      'type' => [
        '' => 'Нет',
        'Contract' => 'Контракт',
        'NDA' => 'NDA соглашение о неразглашении',
        'EULA' => 'EULA лицензионное соглашение с конечным пользователем',
        'License Agreement' => 'Лицензионное соглашение'
      ]
    ],
    'presetFilters' => [
      'active' => 'Действующий',
      'draft' => 'Черновик'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Создать папку',
      'Manage Categories' => 'Управление папками',
      'Documents' => 'Документы'
    ],
    'links' => [
      'documents' => 'Документы'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Название',
      'status' => 'Статус',
      'target' => 'Цель',
      'sentAt' => 'Дата отправки',
      'attemptCount' => 'Попыток',
      'emailAddress' => 'Адрес эл. почты',
      'massEmail' => 'Массовая рассылка эл. писем',
      'isTest' => 'Тест'
    ],
    'links' => [
      'target' => 'Цель',
      'massEmail' => 'Массовая рассылка эл. писем'
    ],
    'options' => [
      'status' => [
        'Pending' => 'В ожидании',
        'Sent' => 'Отправлено',
        'Failed' => 'Сбой',
        'Sending' => 'Отправляется'
      ]
    ],
    'presetFilters' => [
      'pending' => 'В ожидании',
      'sent' => 'Отправлено',
      'failed' => 'Сбой'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Создать статью',
      'Any' => 'Любой',
      'Send in Email' => 'Отправить на эл.почту',
      'Move Up' => 'Переместить вверх',
      'Move Down' => 'Переместить вниз',
      'Move to Top' => 'Переместить в начало',
      'Move to Bottom' => 'Переместить в нижнюю часть'
    ],
    'fields' => [
      'name' => 'Название',
      'status' => 'Статус',
      'type' => 'Тип',
      'attachments' => 'Вложения',
      'publishDate' => 'Опубликована',
      'expirationDate' => 'Актуальна до',
      'description' => 'Описание',
      'body' => 'Тело',
      'categories' => 'Категории',
      'language' => 'Язык',
      'portals' => 'Порталы',
      'bodyPlain' => 'Body Plain'
    ],
    'links' => [
      'cases' => 'Обращения',
      'opportunities' => 'Сделки',
      'categories' => 'Категории',
      'portals' => 'Порталы'
    ],
    'options' => [
      'status' => [
        'In Review' => 'На рассмотрении',
        'Draft' => 'Черновик',
        'Archived' => 'В архиве',
        'Published' => 'Опубликована'
      ],
      'type' => [
        'Article' => 'Статья'
      ]
    ],
    'tooltips' => [
      'portals' => 'Статья будет доступна только на определенных порталах.'
    ],
    'presetFilters' => [
      'published' => 'Опубликована'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Создать категорию',
      'Manage Categories' => 'Управление категориями',
      'Articles' => 'Статьи'
    ],
    'links' => [
      'articles' => 'Статьи'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Конвертирован в',
      'Create Lead' => 'Создать кандидата',
      'Convert' => 'Конвертировать',
      'convert' => 'конвертация'
    ],
    'fields' => [
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'title' => 'Должность',
      'website' => 'Сайт',
      'phoneNumber' => 'Телефон',
      'accountName' => 'Контрагент',
      'doNotCall' => 'Не звонить',
      'address' => 'Адрес',
      'status' => 'Статус',
      'source' => 'Источник',
      'opportunityAmount' => 'Сумма сделки',
      'opportunityAmountConverted' => 'Сумма сделки (сконвертированная)',
      'description' => 'Описание',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Cделка',
      'convertedAt' => 'Конвертирован в',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'industry' => 'Вид деятельности',
      'acceptanceStatus' => 'Статус принятия',
      'opportunityAmountCurrency' => 'Валюта суммы сделки',
      'acceptanceStatusMeetings' => 'Статус принятия (Встречи)',
      'acceptanceStatusCalls' => 'Статус принятия (Звонки)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Cделка',
      'cases' => 'Сделки',
      'documents' => 'Документы'
    ],
    'options' => [
      'status' => [
        'New' => 'Новый',
        'Assigned' => 'Назначен',
        'In Process' => 'В процессе',
        'Converted' => 'Конвертирован',
        'Recycled' => 'Удален',
        'Dead' => 'Мертв'
      ],
      'source' => [
        'Call' => 'Звонок',
        'Email' => 'Эл. письмо',
        'Existing Customer' => 'Существующий клиент',
        'Partner' => 'Партнер',
        'Public Relations' => 'Связи с общественностью',
        'Web Site' => 'Сайт',
        'Campaign' => 'Кампания',
        'Other' => 'Другое'
      ]
    ],
    'presetFilters' => [
      'active' => 'Активный',
      'actual' => 'Open',
      'converted' => 'Конвертированны'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Название',
      'status' => 'Статус',
      'storeSentEmails' => 'Сохранять отправленные эл. письма',
      'startAt' => 'Дата начала',
      'fromAddress' => 'Адрес отправителя',
      'fromName' => 'Имя отправителя',
      'replyToAddress' => 'Обратный адрес',
      'replyToName' => 'Имя для обратного адреса',
      'campaign' => 'Кампания',
      'emailTemplate' => 'Шаблон эл. письма',
      'inboundEmail' => 'Учетная запись эл. почты',
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'optOutEntirely' => 'Отписать навсегда',
      'smtpAccount' => 'SMTP-аккаунт'
    ],
    'links' => [
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'queueItems' => 'Элементы очереди эл. почты',
      'campaign' => 'Кампания',
      'emailTemplate' => 'Шаблон эл. письма',
      'inboundEmail' => 'Учетная запись эл. почты'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Черновик',
        'Pending' => 'В ожидании',
        'In Process' => 'В процессе',
        'Complete' => 'Завершена',
        'Canceled' => 'Отменена',
        'Failed' => 'Сбой'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Создать массовую рассылку эл. писем',
      'Send Test' => 'Отправить тестовое эл. письмо',
      'System SMTP' => 'Системный SMTP',
      'system' => 'система',
      'group' => 'группа'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Выберите хотя бы одну цель',
      'testSent' => 'Должно отправиться тестовое эл. письмо'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Адреса эл. почты получателей, которые отписались будут помечены как отписавшиеся и больше не будут получать массовые рассылки эл. писем.',
      'targetLists' => 'Цели которые должны получить сообщения.',
      'excludingTargetLists' => 'Цели которые не должны получить сообщения.',
      'storeSentEmails' => 'Эл. письма будут храниться в CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Актуальные',
      'complete' => 'Завершенные'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Лиды',
      'reminders' => 'Напоминания',
      'account' => 'Контрагент',
      'acceptanceStatus' => 'Статус принятия',
      'dateStartDate' => 'Дата начала (весь день)',
      'dateEndDate' => 'Дата окончания (весь день)',
      'isAllDay' => 'Весь день',
      'sourceEmail' => 'Электронная почта источника',
      'uid' => 'UID',
      'joinUrl' => 'Join URL'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Запланирована',
        'Held' => 'Состоялась',
        'Not Held' => 'Не состоялась'
      ],
      'acceptanceStatus' => [
        'None' => 'Нет',
        'Accepted' => 'Согласен',
        'Declined' => 'Не согласен',
        'Tentative' => 'Есть сомнения'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Состоялось',
      'setNotHeld' => 'Не состоялось'
    ],
    'labels' => [
      'Create Meeting' => 'Создать встречу',
      'Set Held' => 'Состоялось',
      'Set Not Held' => 'Не состоялось',
      'Send Invitations' => 'Отправить приглашения',
      'Send Cancellation' => 'Отправить отмену',
      'on time' => 'во время',
      'before' => 'до начала',
      'All-Day' => 'Весь день',
      'Acceptance' => 'Принятие'
    ],
    'presetFilters' => [
      'planned' => 'Запланированные',
      'held' => 'Завершенные',
      'todays' => 'На сегодня'
    ],
    'messages' => [
      'sendInvitationsToSelectedAttendees' => 'Выбранным участникам будут отправлены электронные письма с приглашениями.',
      'sendCancellationsToSelectedAttendees' => 'Выбранным участникам будут отправлены электронные письма об отмене участия.',
      'selectAcceptanceStatus' => 'Установите свой статус принятия.',
      'nothingHasBeenSent' => 'Ничего не было отправлено'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Название',
      'account' => 'Контрагент',
      'stage' => 'Стадия',
      'amount' => 'Сумма',
      'probability' => 'Вероятность успеха, %',
      'leadSource' => 'Источник кандидата',
      'doNotCall' => 'Не звонить',
      'closeDate' => 'Дата закрытия',
      'contacts' => 'Контакты',
      'contact' => 'Контакт (основной)',
      'description' => 'Описание',
      'amountConverted' => 'Сумма (сконвертированная)',
      'amountWeightedConverted' => 'Сумма (средневзвешенная)',
      'campaign' => 'Кампания',
      'originalLead' => 'Оригинальный лид',
      'amountCurrency' => 'Валюта суммы',
      'contactRole' => 'Роль контактов',
      'lastStage' => 'Последняя стадия'
    ],
    'links' => [
      'contacts' => 'Контакты',
      'contact' => 'Контакт (основной)',
      'documents' => 'Документы',
      'campaign' => 'Кампания',
      'originalLead' => 'Оригинальный лид'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Привлечение клиента',
        'Qualification' => 'Оценка возможности',
        'Proposal' => 'Предложение',
        'Negotiation' => 'Согласование',
        'Needs Analysis' => 'Требует анализа',
        'Value Proposition' => 'Выбор предложения/оферты',
        'Id. Decision Makers' => 'Определение ответственного лица',
        'Perception Analysis' => 'Проведение анализа',
        'Proposal/Price Quote' => 'Отправлено предложение/оферта',
        'Negotiation/Review' => 'Согласование/рассмотрение',
        'Closed Won' => 'Закрыто - Успех',
        'Closed Lost' => 'Закрыто - Провал'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Создать сделку'
    ],
    'presetFilters' => [
      'open' => 'Открыть',
      'won' => 'Успешные',
      'lost' => 'Провальные'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Название',
      'description' => 'Описание',
      'entryCount' => 'Количество',
      'optedOutCount' => 'Количество пользователей, которые сняли подписку',
      'campaigns' => 'Кампании',
      'endDate' => 'Дата окончания',
      'targetLists' => 'Списки целей',
      'includingActionList' => 'Включая',
      'excludingActionList' => 'Исключая',
      'targetStatus' => 'Статус цели',
      'isOptedOut' => 'Отписалось',
      'sourceCampaign' => 'Source Campaign',
      'category' => 'Category'
    ],
    'links' => [
      'accounts' => 'Контрагенты',
      'contacts' => 'Контакты',
      'leads' => 'Лиды',
      'campaigns' => 'Кампании',
      'massEmails' => 'Массовые рассылки эл. писем',
      'category' => 'Category'
    ],
    'options' => [
      'type' => [
        'Email' => 'Эл. письмо',
        'Web' => 'Интернет',
        'Television' => 'Телевидение',
        'Radio' => 'Радио',
        'Newsletter' => 'Информационный бюллетень'
      ],
      'targetStatus' => [
        'Opted Out' => 'Отписан',
        'Listed' => 'В списке'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Создать список целей',
      'Opted Out' => 'Отписавшиеся',
      'Cancel Opt-Out' => 'Отменить отписку',
      'Opt-Out' => 'Отписать'
    ]
  ],
  'TargetListCategory' => [
    'labels' => [
      'Create TargetListCategory' => 'Create Category'
    ],
    'links' => [
      'targetLists' => 'Target Lists'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'dateStartDate' => 'Дата начала (весь день)',
      'dateEndDate' => 'Дата окончания (весь день)',
      'priority' => 'Приоритет',
      'description' => 'Описание',
      'isOverdue' => 'Просрочена',
      'account' => 'Контрагент',
      'dateCompleted' => 'Дата завершения',
      'attachments' => 'Вложения',
      'reminders' => 'Напоминания',
      'contact' => 'Контакт',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'attachments' => 'Вложения',
      'account' => 'Контрагент',
      'contact' => 'Контакт',
      'email' => 'Электронная почта'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'Не началась',
        'Started' => 'Началась',
        'Completed' => 'Завершена',
        'Canceled' => 'Отменена',
        'Deferred' => 'Отложена'
      ],
      'priority' => [
        'Low' => 'Низкий',
        'Normal' => 'Обычный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно'
      ]
    ],
    'labels' => [
      'Create Task' => 'Создать задачу',
      'Complete' => 'Завершить',
      'overdue' => 'просроченный'
    ],
    'presetFilters' => [
      'actual' => 'Open',
      'completed' => 'Завершенные',
      'deferred' => 'Отложенные',
      'todays' => 'На сегодня',
      'overdue' => 'Просроченные'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Ответить на электронное письмо'
    ]
  ]
];
