<?php
/*
	Welcome to webhooks translation file!
	You're currently at Russian (Русский) language
	Credits: *your username*
	
	If you see array instead of simple string, that means you can add as many variations of translation as you want and they will be picked randomly
*/
$webhookLang['rateSuccessTitle'] = ['Новый уровень был оценён!', 'Новый оценённый уровень!', 'Кто-то оценил уровень!']; // This one is array
$webhookLang['rateSuccessTitleDM'] = ['Ваш уровень был оценён!', 'Ваш уровень оценили!', 'Кто-то оценил ваш уровень!'];
$webhookLang['rateSuccessDesc'] = '%1$s оценил(а) уровень!'; // And this one is string
$webhookLang['rateSuccessDescDM'] = '%1$s оценил(а) ваш уровень! %2$s';
$webhookLang['rateFailTitle'] = ['С уровня сняли оценку!', 'Кто-то снял оценку с уровня!'];
$webhookLang['rateFailTitleDM'] = ['С вашего уровня сняли оценку!', 'Кто-то снял оценку с вашего уровня!'];
$webhookLang['rateFailDesc'] = '%1$s снял(а) оценку с уровня!';
$webhookLang['rateFailDescDM'] = '%1$s снял(а) оценку с вашего уровня! %2$s';

$webhookLang['levelTitle'] = 'Уровень';
$webhookLang['levelDesc'] = '%1$s от %2$s'; // Name by Creator
$webhookLang['levelIDTitle'] = 'ID уровня';
$webhookLang['difficultyTitle'] = 'Сложность';
$webhookLang['difficultyDesc0'] = '%1$s, %2$s звезда'; // Auto, 1 star
$webhookLang['difficultyDesc1'] = '%1$s, %2$s звезды'; // Easy, 2 stars
$webhookLang['difficultyDesc2'] = '%1$s, %2$s звёзд'; // Hard, 5 stars
$webhookLang['difficultyDescMoon0'] = '%1$s, %2$s луна'; // Auto, 1 moon (Platformer)
$webhookLang['difficultyDescMoon1'] = '%1$s, %2$s луны'; // Easy, 2 moons (Platformer)
$webhookLang['difficultyDescMoon2'] = '%1$s, %2$s лун'; // Hard, 5 moons (Platformer)
$webhookLang['statsTitle'] = 'Статистика';
$webhookLang['requestedTitle'] = 'Автор запросил';
$webhookLang['requestedDesc0'] = '%1$s звезда'; // 1 star
$webhookLang['requestedDesc1'] = '%1$s звезды'; // 2 stars
$webhookLang['requestedDesc2'] = '%1$s звёзд'; // 5 stars
$webhookLang['requestedDescMoon0'] = '%1$s луна'; // 1 moon (Platformer)
$webhookLang['requestedDescMoon1'] = '%1$s луны'; // 2 moons (Platformer)
$webhookLang['requestedDescMoon2'] = '%1$s лун'; // 5 moons (Platformer)
$webhookLang['descTitle'] = 'Описание';
$webhookLang['descDesc'] = '*Нет описания*';
$webhookLang['footer'] = '%1$s, приятной игры!';

$webhookLang['suggestTitle'] = ['Проверьте уровень!', 'Уровень был отправлен на оценку!', 'Кто-то отправил уровень на оценку!'];
$webhookLang['suggestDesc'] = '%1$s отправил(а) уровень на оценку!';
$webhookLang['footerSuggest'] = '%1$s, приятного модерирования!';

$webhookLang['accountLinkTitle'] = ['Привязка аккаунта!', 'Кто-то хочет привязать аккаунт!'];
$webhookLang['accountLinkDesc'] = 'Кажется, что %1$s решил(а) привязать свой игровой аккаунт к вашему Discord аккаунту. Напишите **!discord accept *код*** ниже в сообщения своего профиля, чтобы сделать это. Если это не вы - **игнорируйте** данное сообщение!';
$webhookLang['accountCodeFirst'] = 'Первое число';
$webhookLang['accountCodeSecond'] = 'Второе число';
$webhookLang['accountCodeThird'] = 'Третье число';
$webhookLang['accountCodeFourth'] = 'Четвёртое число';
$webhookLang['accountUnlinkTitle'] = ['Отвязка аккаунта!', 'Вы отвязали аккаунт!'];
$webhookLang['accountUnlinkDesc'] = 'Вы успешно отвязали аккаунт %1$s от вашего Discord аккаунта!';
$webhookLang['accountAcceptTitle'] = ['Привязка аккаунта!', 'Вы привязали аккаунт!'];
$webhookLang['accountAcceptDesc'] = 'Вы успешно привязали аккаунт %1$s к вашему Discord аккаунту!';

$webhookLang['playerBanTitle'] = ['Игрок был забанен!', 'Кто-то забанил кого-то!', 'Бан!'];
$webhookLang['playerBanTitleDM'] = ['Вы были забанены!', 'Кто-то забанил вас!', 'Бан!'];
$webhookLang['playerUnbanTitle'] = ['Игрок был разбанен!', 'Кто-то разбанил кого-то!', 'Разбан!'];
$webhookLang['playerUnbanTitleDM'] = ['Вы были разбанены!', 'Кто-то разбанил вас!', 'Разбан!'];
$webhookLang['playerBanTopDesc'] = '%1$s заблокировал(а) %2$s в топе игроков!';
$webhookLang['playerBanTopDescDM'] = '%1$s заблокировал(а) вас в топе игроков.';
$webhookLang['playerUnbanTopDesc'] = '%1$s разблокировал(а) %2$s в топе игроков!';
$webhookLang['playerUnbanTopDescDM'] = '%1$s разблокировал(а) вас в топе игроков!';
$webhookLang['playerBanCreatorDesc'] = '%1$s заблокировал(а) %2$s в топе строителей!';
$webhookLang['playerBanCreatorDescDM'] = '%1$s заблокировал(а) вас в топе строителей.';
$webhookLang['playerUnbanCreatorDesc'] = '%1$s разблокировал(а) %2$s в топе строителей!';
$webhookLang['playerUnbanCreatorDescDM'] = '%1$s разблокировал(а) вас в топе строителей!';
$webhookLang['playerBanUploadDesc'] = '%1$s заблокировал(а) %2$s возможность выкладывания уровней!';
$webhookLang['playerBanUploadDescDM'] = '%1$s заблокировал(а) вам возможность выкладывания уровней.';
$webhookLang['playerUnbanUploadDesc'] = '%1$s разблокировал(а) %2$s возможность выкладывания уровней!';
$webhookLang['playerUnbanUploadDescDM'] = '%1$s разблокировал(а) вам возможность выкладывания уровней!';
$webhookLang['playerModTitle'] = 'Модератор';
$webhookLang['playerReasonTitle'] = 'Причина';
$webhookLang['playerBanReason'] = '*Без причины*';
$webhookLang['footerBan'] = '%1$s.';
$webhookLang['playerBanCommentDesc'] = '%1$s заблокировал(а) %2$s возможность комментирования!';
$webhookLang['playerBanCommentDescDM'] = '%1$s заблокировал(а) вам возможность комментирования.';
$webhookLang['playerUnbanCommentDesc'] = '%1$s разблокировал(а) %2$s возможность комментирования!';
$webhookLang['playerUnbanCommentDescDM'] = '%1$s разблокировал(а) вам возможность комментирования!';
$webhookLang['playerBanAccountDesc'] = '%1$s заблокировал(а) %2$s аккаунт!';
$webhookLang['playerBanAccountDescDM'] = '%1$s заблокировал(а) вам аккаунт.';
$webhookLang['playerUnbanAccountDesc'] = '%1$s разблокировал(а) %2$s аккаунт!';
$webhookLang['playerUnbanAccountDescDM'] = '%1$s разблокировал(а) вам аккаунт!';
$webhookLang['playerExpiresTitle'] = 'Истекает';
$webhookLang['playerTypeTitle'] = 'Тип пользователя';
$webhookLang['playerTypeName0'] = 'ID аккаунта';
$webhookLang['playerTypeName1'] = 'ID игрока';
$webhookLang['playerTypeName2'] = 'IP адрес';

$webhookLang['dailyTitle'] = 'Новый ежедневный уровень!';
$webhookLang['dailyTitleDM'] = 'Ваш уровень — ежедневный!';
$webhookLang['dailyDesc'] = 'Уровень попал в ежедневные уровни!';
$webhookLang['dailyDescDM'] = 'Ваш уровень попал в ежедневные уровни! %1$s';
$webhookLang['weeklyTitle'] = 'Новый еженедельный уровень!';
$webhookLang['weeklyTitleDM'] = 'Ваш уровень — еженедельный!';
$webhookLang['weeklyDesc'] = 'Уровень попал в еженедельные уровни!';
$webhookLang['weeklyDescDM'] = 'Ваш уровень попал в еженедельные уровни! %1$s';
$webhookLang['eventTitle'] = 'Новый уровень мероприятия!';
$webhookLang['eventTitleDM'] = 'Ваш уровень попал в мероприятие!';
$webhookLang['eventDesc'] = 'Уровень попал в уровни мероприятий!';
$webhookLang['eventDescDM'] = 'Ваш уровень попал в уровни мероприятий! %1$s';

$webhookLang['logsRegisterTitle'] = 'Новый аккаунт!';
$webhookLang['logsRegisterDesc'] = 'Кто-то зарегистрировал новый аккаунт!';
$webhookLang['logsUsernameField'] = 'Никнейм игрока';
$webhookLang['logsPlayerIDField'] = 'ID игрока';
$webhookLang['logsRegisterTimeField'] = 'Время регистрации';
$webhookLang['logsIsActivatedField'] = 'Аккаунт активирован?';
$webhookLang['logsRegisterYes'] = 'Да';
$webhookLang['logsRegisterNo'] = 'Нет';

$webhookLang['logsLevelDeletedTitle'] = 'Уровень удалён!';
$webhookLang['logsLevelDeletedDesc'] = 'Кто-то удалил уровень!';
$webhookLang['logsLevelChangedTitle'] = 'Уровень изменён!';
$webhookLang['logsLevelChangedDesc'] = 'Кто-то изменил уровень!';
$webhookLang['logsLevelUploadedTitle'] = 'Уровень выложен!';
$webhookLang['logsLevelUploadedDesc'] = 'Кто-то выложил уровень!';
$webhookLang['logsLevelChangeNameValue'] = 'Старое название:'.PHP_EOL.'%1$s'.PHP_EOL.'Новое название:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeExtIDValue'] = 'Старый создатель уровня:'.PHP_EOL.'%1$s'.PHP_EOL.'Новый создатель уровня:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeDescValue'] = 'Старое описание:'.PHP_EOL.'%1$s'.PHP_EOL.'Новое описание:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeSongIDValue'] = 'Старая песня:'.PHP_EOL.'%1$s'.PHP_EOL.'Новая песня:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeAudioTrackValue'] = 'Старая официальная песня:'.PHP_EOL.'%1$s'.PHP_EOL.'Новая официальная песня:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangePasswordValue'] = 'Старый пароль:'.PHP_EOL.'||%1$s||'.PHP_EOL.'Новый пароль:'.PHP_EOL.'||%2$s||';
$webhookLang['logsLevelChangeCoinsValue'] = 'Активированы ли монеты до?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Активированы ли монеты после?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeUnlistedValue'] = 'Скрыт ли уровень до?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Скрыт ли уровень после?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeUnlisted2Value'] = '(2) Скрыт ли уровень до?'.PHP_EOL.'**%1$s**'.PHP_EOL.'(2) Скрыт ли уровень после?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeUpdateLockedValue'] = 'Заблокировано ли обновление уровня до?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Заблокировано ли обновление уровня после?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeCommentLockedValue'] = 'Заблокировано ли комментирование уровня до?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Заблокировано ли комментирование уровня после?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeNameField'] = 'Изменено название уровня';
$webhookLang['logsLevelChangeExtIDField'] = 'Изменён автор уровня';
$webhookLang['logsLevelChangeDescField'] = 'Изменено описание уровня';
$webhookLang['logsLevelChangeSongIDField'] = 'Изменена песня уровня';
$webhookLang['logsLevelChangeAudioTrackField'] = 'Изменена официальная песня уровня';
$webhookLang['logsLevelChangePasswordField'] = 'Изменён пароль уровня';
$webhookLang['logsLevelChangeCoinsField'] = 'Изменено состояние монеток уровня';
$webhookLang['logsLevelChangeUnlistedField'] = 'Изменено состояние публичности уровня';
$webhookLang['logsLevelChangeUnlisted2Field'] = 'Изменено состояние публичности уровня (2)'; // Probably unused
$webhookLang['logsLevelChangeUpdateLockedField'] = 'Изменено состояние обновления уровня';
$webhookLang['logsLevelChangeCommentLockedField'] = 'Изменено состояние комментирования уровня';
$webhookLang['logsLevelChangeWhoField'] = 'Кто изменил уровень?';

$webhookLang['songTitle'] = 'Песня';
$webhookLang['levelIsPublic'] = 'Уровень публичный';
$webhookLang['levelOnlyForFriends'] = 'Уровень только для друзей';
$webhookLang['levelIsUnlisted'] = 'Уровень скрыт';
$webhookLang['unlistedTitle'] = 'Публичность уровня';

$webhookLang['logsAccountChangeWhoField'] = 'Кто изменил аккаунт?';
$webhookLang['logsAccountChangeUsernameField'] = 'Изменён никнейм';
$webhookLang['logsAccountChangeUsernameValue'] = 'Никнейм до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Никнейм после:'.PHP_EOL.'`%2$s`';
$webhookLang['mS0'] = 'Личные сообщения открыты для всех';
$webhookLang['mS1'] = 'Личные сообщения открыты для друзей';
$webhookLang['mS2'] = 'Личные сообщения закрыты';
$webhookLang['logsAccountChangeMSField'] = 'Изменена приватность личных сообщений';
$webhookLang['logsAccountChangeMSValue'] = 'Приватность личных сообщений до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Приватность личных сообщений после:'.PHP_EOL.'`%2$s`';
$webhookLang['frS0'] = 'Заявки в друзья открыты';
$webhookLang['frS1'] = 'Заявки в друзья закрыты';
$webhookLang['logsAccountChangeFRSField'] = 'Изменена приватность заявок в друзья';
$webhookLang['logsAccountChangeFRSValue'] = 'Приватность заявок в друзья до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Приватность заявок в друзья после:'.PHP_EOL.'`%2$s`';
$webhookLang['cS0'] = 'История комментариев открыта для всех';
$webhookLang['cS1'] = 'История комментариев открыта для друзей';
$webhookLang['cS2'] = 'История комментариев закрыта';
$webhookLang['logsAccountChangeCSField'] = 'Изменена приватность истории комментариев';
$webhookLang['logsAccountChangeCSValue'] = 'Приватность истории комментариев до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Приватность истории комментариев после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeYTField'] = 'Изменена ссылка на YouTube канал';
$webhookLang['logsAccountChangeYTValue'] = 'Ссылка на YouTube канал до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Ссылка на YouTube канал после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoYT'] = 'Нет ссылки на YouTube канал';
$webhookLang['logsAccountChangeTWField'] = 'Изменена ссылка на аккаунт в X';
$webhookLang['logsAccountChangeTWValue'] = 'Ссылка на аккаунт в X до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Ссылка на аккаунт в X после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoTW'] = 'Нет ссылки на аккаунт в X';
$webhookLang['logsAccountChangeTTVField'] = 'Изменена ссылка на Twitch канал';
$webhookLang['logsAccountChangeTTVValue'] = 'Ссылка на Twitch канал до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Ссылка на Twitch канал после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoTTV'] = 'Нет ссылки на Twitch канал';
$webhookLang['logsAccountChangeActiveField'] = 'Изменено состояние активности аккаунта';
$webhookLang['logsAccountChangeActiveValue'] = 'Активирован ли аккаунт до?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Активирован ли аккаунт после?'.PHP_EOL.'**%2$s**';
$webhookLang['logsAccountChangePasswordField'] = 'Изменён пароль аккаунта';
$webhookLang['logsAccountChangePasswordValue'] = '||... Что ты тут хотел(а) увидеть?||';
$webhookLang['logsWhatWasChangedField'] = 'Что было изменено?';
$webhookLang['logsAccountChangedTitle'] = 'Аккаунт был изменён!';
$webhookLang['logsAccountChangedDesc'] = 'Кто-то изменил аккаунт!';

$webhookLang['logsListChangeWhoField'] = 'Кто изменил список уровней?';
$webhookLang['logsListDeletedTitle'] = 'Список уровней был удалён!';
$webhookLang['logsListDeletedDesc'] = 'Кто-то удалил список уровней!';
$webhookLang['logsListUploadedTitle'] = 'Список уровней был выложен!';
$webhookLang['logsListUploadedDesc'] = 'Кто-то выложил список уровней!';
$webhookLang['listTitle'] = 'Список уровней';
$webhookLang['listIDTitle'] = 'ID списка уровней';
$webhookLang['unlistedListTitle'] = 'Публичность списка уровней';
$webhookLang['listIsPublic'] = 'Список уровней виден всем';
$webhookLang['listIsUnlisted'] = 'Список уровней скрыт';
$webhookLang['listOnlyForFriends'] = 'Список уровней виден только друзьям';
$webhookLang['logsListChangedTitle'] = 'Список уровней был изменён!';
$webhookLang['logsListChangedDesc'] = 'Кто-то изменил список уровней!';
$webhookLang['logsListChangeNameField'] = 'Изменено название списка уровней';
$webhookLang['logsListChangeNameValue'] = 'Название списка уровней до:'.PHP_EOL.'%1$s'.PHP_EOL.'Название списка уровней после:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeAccountIDField'] = 'Изменён автор списка уровней';
$webhookLang['logsListChangeAccountIDValue'] = 'Автор списка уровней до:'.PHP_EOL.'%1$s'.PHP_EOL.'Автор списка уровней после:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeDescField'] = 'Изменено описание списка уровней';
$webhookLang['logsListChangeDescValue'] = 'Описание списка уровней до:'.PHP_EOL.'%1$s'.PHP_EOL.'Описание списка уровней после:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeReward0'] = '**%1$s** кристалл'; // 1 diamond
$webhookLang['logsListChangeReward1'] = '**%1$s** кристалла'; // 2 diamonds
$webhookLang['logsListChangeReward2'] = '**%1$s** кристаллов'; // 5 diamonds
$webhookLang['logsListChangeRewardField'] = 'Изменена награда за прохождение';
$webhookLang['logsListChangeRewardValue'] = 'Награда до:'.PHP_EOL.'%1$s'.PHP_EOL.'Награда после:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeUnlistedField'] = 'Изменено состояние публичности списка уровней';
$webhookLang['logsListChangeUnlistedValue'] = 'Скрыт ли список уровней до?'.PHP_EOL.'`%1$s`'.PHP_EOL.'Скрыт ли список уровней после?'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeDiffField'] = 'Изменена сложность списка уровней';
$webhookLang['logsListChangeDiffValue'] = 'Сложность до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Сложность после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeLevelsField'] = 'Изменены уровни в списке уровней';
$webhookLang['logsListChangeLevelsValue'] = 'Уровни до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Уровни после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeRewardCount0'] = '**%1$s** уровень'; // 1 level
$webhookLang['logsListChangeRewardCount1'] = '**%1$s** уровня'; // 2 levels
$webhookLang['logsListChangeRewardCount2'] = '**%1$s** уровней'; // 5 levels
$webhookLang['logsListChangeRewardCountField'] = 'Изменено количество уровней для прохождения';
$webhookLang['logsListChangeRewardCountValue'] = 'Количество уровней до:'.PHP_EOL.'%1$s'.PHP_EOL.'Количество уровней после:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeCommentLockedField'] = 'Изменено состояние комментирования списка уровней';
$webhookLang['logsListChangeCommentLockedValue'] = 'Заблокировано ли комментирование до?'.PHP_EOL.'%1$s'.PHP_EOL.'Заблокировано ли комментирование после?'.PHP_EOL.'%2$s';
$webhookLang['difficultyListDesc0'] = '%1$s, %2$s кристалл'; // Auto, 1 star
$webhookLang['difficultyListDesc1'] = '%1$s, %2$s кристалла'; // Easy, 2 stars
$webhookLang['difficultyListDesc2'] = '%1$s, %2$s кристаллов'; // Hard, 5 stars

$webhookLang['logsModChangeWhoField'] = 'Кто изменил модератора?';
$webhookLang['logsModDemotedTitle'] = 'Модератор снят!';
$webhookLang['logsModDemotedDesc'] = 'Кто-то снял модератора!';
$webhookLang['logsModPromotedTitle'] = 'Модератор назначен!';
$webhookLang['logsModPromotedDesc'] = 'Кто-то назначил модератора!';
$webhookLang['logsModChangeRoleUnknown'] = '*Неизвестная роль*';
$webhookLang['roleField'] = 'Роль';
$webhookLang['logsModChangedTitle'] = 'Модератор изменён!';
$webhookLang['logsModChangedDesc'] = 'Кто-то изменил модератора!';
$webhookLang['logsModChangeRoleField'] = 'Изменена роль модератора';
$webhookLang['logsModChangeRoleValue'] = 'Старая роль:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Новая роль:'.PHP_EOL.'`%2$s`';

$webhookLang['logsGauntletChangeWhoField'] = 'Кто изменил Гаунтлет?';
$webhookLang['logsGauntletDeletedTitle'] = 'Гаунтлет удалён!';
$webhookLang['logsGauntletDeletedDesc'] = 'Кто-то удалил Гаунтлет!';
$webhookLang['logsGauntletCreatedTitle'] = 'Гаунтлет создан!';
$webhookLang['logsGauntletCreatedDesc'] = 'Кто-то создал Гаунтлет!';
$webhookLang['gauntletNameField'] = 'Название Гаунтлета';
$webhookLang['level1Field'] = 'Первый уровень';
$webhookLang['level2Field'] = 'Второй уровень';
$webhookLang['level3Field'] = 'Третий уровень';
$webhookLang['level4Field'] = 'Четвёртый уровень';
$webhookLang['level5Field'] = 'Пятый уровень';
$webhookLang['logsGauntletChangedTitle'] = 'Гаунтлет изменён!';
$webhookLang['logsGauntletChangedDesc'] = 'Кто-то изменил Гаунтлет!';
$webhookLang['logsGauntletChangeGauntletField'] = 'Изменён сам Гаунтлет';
$webhookLang['logsGauntletChangeGauntletValue'] = 'Старый Гаунтлет:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Новый Гаунтлет:'.PHP_EOL.'`%2$s`';
$webhookLang['logsGauntletChangeLevel1Field'] = 'Изменён первый уровень';
$webhookLang['logsGauntletChangeLevelValue'] = 'Уровень до:'.PHP_EOL.'%1$s'.PHP_EOL.'Уровень после:'.PHP_EOL.'%2$s';
$webhookLang['logsGauntletChangeLevel2Field'] = 'Изменён второй уровень';
$webhookLang['logsGauntletChangeLevel3Field'] = 'Изменён третий уровень';
$webhookLang['logsGauntletChangeLevel4Field'] = 'Изменён четвёртый уровень';
$webhookLang['logsGauntletChangeLevel5Field'] = 'Изменён пятый уровень';

$webhookLang['logsMapPackChangeWhoField'] = 'Кто изменил Мап-Пак?';
$webhookLang['logsMapPackDeletedTitle'] = 'Мап-Пак удалён!';
$webhookLang['logsMapPackDeletedDesc'] = 'Кто-то удалил Мап-Пак!';
$webhookLang['logsMapPackCreatedTitle'] = 'Мап-Пак создан!';
$webhookLang['logsMapPackCreatedDesc'] = 'Кто-то создал Мап-Пак!';
$webhookLang['packField'] = 'Мап-Пак';
$webhookLang['packRewardCoins0'] = '%1$s монетка'; // 1 coin
$webhookLang['packRewardCoins1'] = '%1$s монетки'; // 2 coins
$webhookLang['packRewardCoins2'] = '%1$s монеток'; // 5 coins
$webhookLang['packRewardField'] = 'Награда';
$webhookLang['packRewardValue'] = '%1$s и %2$s'; // X stars and X coins
$webhookLang['undefinedLevel'] = '*Неизвестный уровень*';
$webhookLang['packLevelsField'] = 'Уровни';
$webhookLang['packColorsField'] = 'Цвета';
$webhookLang['packColorsValue'] = 'Цвет полоски: `%1$s`'.PHP_EOL.'Цвет текста: `%2$s`';
$webhookLang['packTimestampField'] = 'Дата создания';
$webhookLang['logsMapPackChangedTitle'] = 'Мап-Пак изменён!';
$webhookLang['logsMapPackChangedDesc'] = 'Кто-то изменил Мап-Пак!';
$webhookLang['logsMapPackChangeNameField'] = 'Изменено название';
$webhookLang['logsMapPackChangeNameValue'] = 'Старое название:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Новое название:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeLevelsField'] = 'Изменены уровни';
$webhookLang['logsMapPackChangeLevelsValue'] = 'Уровни до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Уровни после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeStarsField'] = 'Изменены звёзды';
$webhookLang['logsMapPackChangeStarsValue'] = 'Звёзды до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Звёзды после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeCoinsField'] = 'Изменены монетки';
$webhookLang['logsMapPackChangeCoinsValue'] = 'Монетки до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Монетки после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeDifficultyField'] = 'Изменена сложность';
$webhookLang['logsMapPackChangeDifficultyValue'] = 'Сложность до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Сложность после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeColor1Field'] = 'Изменён цвет полоски';
$webhookLang['logsMapPackChangeColorValue'] = 'Цвет до:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Цвет после:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeColor2Field'] = 'Изменён цвет текста';
?>