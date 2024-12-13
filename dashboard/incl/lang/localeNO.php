<?php
global $dbPath;
require __DIR__."/../../".$dbPath."config/dashboard.php";

$string["homeNavbar"] = "Home";
$string["welcome"] = "Velkommen til ".$gdps.'!';
$string["footer"] = $gdps.", ".date('Y', time());
$string["tipsAfterInstalling"] = "Velkommen til Dashboard! Vi gir deg noen tips etter installasjonen:<br>
1. Det ser ut til at det har dukket opp nye tillatelser i SQL i tabellen 'roles'! Du bør sjekke det ut...<br>
2. Hvis du legger 'icon.png' i 'dashboard'-mappen, vil ikonet for GDPS-en din vises øverst til venstre!<br>
3. Du bør konfigurere config/dashboard.php!";
$string["wwygdt"] = "Hva skal du gjøre i dag?";
$string["game"] = "Spill";
$string["guest"] = "gjest";
$string["account"] = "Regnskap";
$string["levelsOptDesc"] = "Vis liste over nivåer";
$string["songsOptDesc"] = "Vis sangliste";
$string["yourClanOptDesc"] = "Vis klan \"%s\"";
$string["clanOptDesc"] = "Utsikt klanliste";
$string["yourProfile"] = "Din profil";
$string["profileOptDesc"] = "View your profile";
$string["messengerOptDesc"] ="Åpne messenger";
$string["addSongOptDesc"] = "Legg til sang på serveren";
$string["loginOptDesc"] = "Logg inn på kontoen din";
$string["createAcc"] = "Opprett en konto";
$string["registerOptDesc"] = "melde deg på %s";
$string["downloadOptDesc"] = "laste ned %s";

$string["tryCron"] = "Kjør Cron";
$string["cronSuccess"] = "suksess!";
$string["cronError"] = "Feil!";

$string["profile"] = "Profil";
$string["empty"] = "Innholdsløs ...";
$string["writeSomething"] = "Skriv noe!";  
$string["replies"] = "Svar";
$string["replyToComment"] = "Svar på en kommentar";
$string["settings"] = "Innstillinger";
$string["allowMessagesFrom"] = "Tillat meldinger fra...";
$string["allowFriendReqsFrom"] = "Tillat venneforespørsler fra...";
$string["showCommentHistory"] = "Se kommentarhistorikk...";
$string["timezoneChoose"] = "Velg tidssone";
$string["yourYouTube"] = "YouTube-kanalen din";
$string["yourVK"] = "Din side på VK";
$string["yourTwitter"] = "Din side på Twitter";
$string["yourTwitch"] = "Twitch-kanalen din";
$string["saveSettings"] = "Lagre innstillinger";
$string["all"] = "Alle";
$string["friends"] = "Venner";
$string["none"] = "Ingen";
$string["youBlocked"] = "Denne spilleren blokkerte deg!";
$string["cantMessage"] = "Du kan ikke sende melding til denne spilleren!";
  
$string["accountManagement"] = "Kontoadministrasjon";
$string["changePassword"] = "Endre passord";
$string["changeUsername"] = "Endre brukernavnet ditt";
$string["unlistedLevels"] = "Dine ulistede nivåer";

$string["manageSongs"] = "Administrer sanger";
$string["gauntletManage"] = "Administrer gauntlets";
$string["suggestLevels"] = "Foreslåtte nivåer";

$string["modTools"] = "Mod-verktøy";
$string["leaderboardBan"] = "Utestenge en bruker";
$string["unlistedMod"] = "Unoterte nivåer";

$string["reuploadSection"] = "Last opp igjen";
$string["songAdd"] = "Legg til en sang";
$string["songLink"] = "Legg til en sang via lenke";
$string["packManage"] = "Administrer kartpakker";

$string["browse"] = "Lete";
$string["statsSection"] = "Statistikk";
$string["dailyTable"] = "Daglige nivåer";
$string["modActionsList"] = "Mod-handlinger";
$string["modActions"] = "Servermoderatorer";
$string["gauntletTable"] = "Liste over gauntlets";
$string["packTable"] = "Liste over kartpakker";
$string["leaderboardTime"] = "Fremdrift for ledertavler";

$string["download"] = "Laste ned";
$string["forwindows"] = "For Windows";
$string["forandroid"] = "For Android";
$string["formac"] = "For Mac";
$string["forios"] = "For iOS";
$string["third-party"] = "Tredjepart";
$string["thanks"] = "Takk til disse menneskene!";
$string["language"] = "Språk";

$string["loginHeader"] = "Velkommen, %s!";
$string["logout"] = "Logg ut";
$string["login"] = "Logg inn";
$string["wrongNickOrPass"] = "Feil brukernavn eller passord!";
$string["invalidid"] = "Ugyldig ID!";
$string["loginBox"] = "Logg inn på kontoen din";
$string["loginSuccess"] = "Du har logget inn på kontoen din!";
$string["loginAlready"] = "Du er allerede logget inn!";
$string["clickHere"] = "Dashbord";
$string["enterUsername"] = "Skriv inn brukernavnet ditt";
$string["enterPassword"] = "Skriv inn passordet ditt";
$string["loginDesc"] = "Her kan du logge inn på kontoen din!";

$string["register"] = "Register";
$string["registerAcc"] = "Kontoregistrering";
$string["registerDesc"] = "Registrer kontoen din!";
$string["repeatpassword"] = "Gjenta passord";
$string["email"] = "E-post";
$string["repeatemail"] = "Gjenta e-post";
$string["smallNick"] = "Brukernavn er for lite!";
$string["smallPass"] = "Password is too small!";
$string["passDontMatch"] = "Passordet er for lite!";
$string["emailDontMatch"] = "E-postene stemmer ikke overens";
$string["registered"] = "Du har registrert en konto!";
$string["bigNick"] = "Brukernavnet er for langt!";
$string["mailExists"] = "Det er en registrert konto som bruker denne e-postadressen!";
$string["badUsername"] = "Vennligst velg et annet brukernavn.";

$string["changePassTitle"] = "Endre passord";
$string["changedPass"] = "Passordet er endret! Du må logge inn på kontoen din igjen.";
$string["wrongPass"] = "Feil passord!";
$string["samePass"] = "Passordene du skrev inn er de samme!";
$string["changePassDesc"] = "Her kan du endre passordet ditt!";
$string["oldPassword"] = "Gammelt passord";
$string["newPassword"] = "Nytt passord";
$string["confirmNew"] = "Bekreft passord";

$string["forcePassword"] = "Tving endring av passord";
$string["forcePasswordDesc"] = "Her kan du tvinge frem endring av spillerens passord!";
$string["forceNick"] = "Tving endring av brukernavn";
$string["forceNickDesc"] = "Her kan du tvinge frem endring av spillerens brukernavn!";
$string["forceChangedPass"] = "<b>%s</b>'s passordet har blitt endret!";
$string["forceChangedNick"] = "<b>%s</b>'s brukernavnet har blitt endret!";
$string["changePassOrNick"] = "Endre spillerens brukernavn eller passord";

$string["changeNickTitle"] = "Endre brukernavn";
$string["changedNick"] = "Username successfully changed! You need to login to you account again.";
$string["wrongNick"] = "Wrong username!";
$string["sameNick"] = "Usernames you entered are the same!";
$string["alreadyUsedNick"] = "Username you entered is already taken!";
$string["changeNickDesc"] = "Here you can change your username!";
$string["oldNick"] = "Old username";
$string["newNick"] = " New username";
$string["password"] = "Password";

$string["packCreate"] = "Create a Map Pack";
$string["packCreateTitle"] = "Create a Map Pack";
$string["packCreateDesc"] = "Here you can create a Map Pack!";
$string["packCreateSuccess"] = "You successfully created a Map Pack called";
$string["packCreateOneMore"] = "One more Map Pack?";
$string["packName"] = "Name of Map Pack";
$string["color"] = "Color";
$string["sameLevels"] = "You chose the same levels!";
$string["show"] = "Show";
$string["packChange"] = "Change Map Pack";
$string["createNewPack"] = "Create new Map Pack!"; // Translate word "create" like its call to action

$string["gauntletCreate"] = "Create Gauntlet";
$string["gauntletCreateTitle"] = "Create Gauntlet";
$string["gauntletCreateDesc"] = "Here you can create a Gauntlet!";
$string["gauntletCreateSuccess"] = "You successfully created a Gauntlet!";
$string["gauntletCreateOneMore"] = "One more Gauntlet?";
$string["chooseLevels"] = "Choose levels!";
$string["checkbox"] = "Confirm";
$string["level1"] = "1st level";
$string["level2"] = "2nd level";
$string["level3"] = "3rd level";
$string["level4"] = "4th level";
$string["level5"] = "5th level";
$string["gauntletChange"] = "Change Gauntlet";
$string["createNewGauntlet"] = "Create new Gauntlet!"; // Translate word "create" like its call to action
$string["gauntletCreateSuccessNew"] = 'You successfully created <b>%1$s</b>!';
$string["gauntletSelectAutomatic"] = "Choose Gauntlet automatically";

$string["addQuest"] = "Add quest";
$string["addQuestDesc"] = "Here you can create a quest!";
$string["questName"] = "Quest name";
$string["questAmount"] = "Required amount";
$string["questReward"] = "Reward";
$string["questCreate"] = "Create a quest";
$string["questsSuccess"] = "You successfully created a quest";
$string["invalidPost"] = "Invalid data!";
$string["fewMoreQuests"] = "It's reccomend to create a few more quests.";
$string["oneMoreQuest?"] = "One more quest?";
$string["changeQuest"] = "Change quest";
$string["createNewQuest"] = "Create new quest!"; // like gauntlets and mappacks above

$string["levelReupload"] = "Reupload level";
$string["levelReuploadDesc"] = "Here you can reupload a level from any server!";
$string["advanced"] = "Advanced options";
$string["errorConnection"] = "Connection error!";
$string["levelNotFound"] = "This level doesn't exist!";
$string["robtopLol"] = "RobTop doesn't like you :c";
$string["sameServers"] = "Host server and the target server are the same!";
$string["levelReuploaded"] = "Level reuploaded! Level ID:";
$string["oneMoreLevel?"] = "One more level?";
$string["levelAlreadyReuploaded"] = "Level already reuploaded!";
$string["server"] = "Server";
$string["levelID"] = "Level ID";
$string["pageDisabled"] = "This page is disabled!";
$string["levelUploadBanned"] = "You're banned from uploading levels!";

$string["activateAccount"] = "Account activation";
$string["activateDesc"] = "Activate your account!";
$string["activated"] = "Your account has been successfully activated!";
$string["alreadyActivated"] = "Your account is already activated";
$string["maybeActivate"] = "Maybe you didn't activate your account yet.";
$string["activate"] = "Activate";
$string["activateDisabled"] = "Account activation is disabled!";

$string["addMod"] = "Add moderator";
$string["addModDesc"] = "Here you can promote someone to Moderator!";
$string["modYourself"] = "You can't grant yourself Moderator!";
$string["alreadyMod"] = "This player is already a Moderator!";
$string["addedMod"] = "You successfully granted Moderator to a player";
$string["addModOneMore"] = "One more moderator?";
$string["modAboveYourRole"] = "You\'re trying to give a role above yours!";
$string["makeNewMod"] = "Make someone moderator!";
$string["reassignMod"] = "Reassign moderator";
$string["reassign"] = "Reassign";
$string['demotePlayer'] = "Demote player";
$string['demotedPlayer'] = "You successfully demoted <b>%s</b>!";
$string['addedModNew'] = "You successfully promoted <b>%s</b> to Moderator!";
$string['demoted'] = 'Demoted';

$string["shareCPTitle"] = "Share Creator Points";
$string["shareCPDesc"] = "Here you can share Creator Points with player!";
$string["shareCP"] = "Share";
$string["alreadyShared"] = "This level already shared CP to this player!";
$string["shareToAuthor"] = "You tried to share CP to level author!";
$string["userIsBanned"] = "This player is banned!";
$string["shareCPOneMore"] = "One more share?";
$string['shareCPSuccessNew'] = 'You successfully shared Creator Points of level <b>%1$s</b> to player <b>%2$s</b>!';

$string["messenger"] = "Messenger";
$string["write"] = "Write";
$string["send"] = "Send";
$string["noMsgs"] = "Start dialog!";
$string["subject"] = "Subject";
$string["msg"] = "Message";
$string["tooFast"] = "You're typing too fast!";
$string["messengerYou"] = "You:";
$string["chooseChat"] = "Choose chat";

$string["levelToGD"] = "Reupload level to target server";
$string["levelToGDDesc"] = "Here you can reupload your level to target server!";
$string["usernameTarget"] = "Username for target server";
$string["passwordTarget"] = "Password for target server";
$string["notYourLevel"] = "This is not your level!";
$string["reuploadFailed"] = "Level reupload error!";

$string["search"] = "Search...";
$string["searchCancel"] = "Cancel search";
$string["emptySearch"] = "Nothing found!";

$string["approve"] = 'Approve';
$string["deny"] = 'Deny';
$string["submit"] = 'Submit';
$string["place"] = 'Place';
$string["add"] = 'Add';
$string["demonlistLevel"] = '%s <text class="dltext">by <button type="button" onclick="a(\'profile/%3$s\', true, true)" style="font-size:25px" class="accbtn" name="accountID" value="%d">%s</button>%4$s</text>';

$string["didntActivatedEmail"] = 'You didn\'t activate your account through email!';
$string["checkMail"] = 'You should check your email...';

$string["likeSong"] = "Add song to favourites";
$string["dislikeSong"] = "Remove song from favourites";
$string["favouriteSongs"] = "Favourite songs";
$string["howMuchLiked"] = "How much liked?";
$string["nooneLiked"] = "Noone liked";

$string["clan"] = "Clan";
$string["joinedAt"] = "Joined clan at: <b>%s</b>";
$string["createdAt"] = "Created clan at: <b>%s</b>";
$string["clanMembers"] = "Clan members";
$string["noMembers"] = "No members";
$string["clanOwner"] = "Clan owner";
$string["noClanDesc"] = "<i>No description</i>";
$string["noClan"] = "This clan doesn't exist!";
$string["clanName"] = "Clan name";
$string["clanTag"] = "Clan tag (3-5 characters)";
$string["clanDesc"] = "Clan description";
$string["clanColor"] = "Clan color";
$string["dangerZone"] = "Danger zone";
$string["giveClan"] = "Give clan";
$string["deleteClan"] = "Delete clan";
$string["goBack"] = "Go back";
$string["areYouSure"] = "Are you sure?";
$string["giveClanDesc"] = "Here you can give your clan to a player.";
$string["notInYourClan"] = "This player is not in your clan!";
$string["givedClan"] = "You successfully gived your clan to <b>%s</b>!";
$string["deletedClan"] = "You deleted clan <b>%s</b>.";
$string["deleteClanDesc"] = "Here you can delete your clan.";
$string["yourClan"] = "Your clan";
$string["members0"] = "<b>1</b> member";
$string["members1"] = "<b>%d</b> members"; 
$string["members2"] = "<b>%d</b> members"; 
$string["noRequests"] = "There is no requests. Chill!";
$string["pendingRequests"] = "Clan requests";
$string["closedClan"] = "Closed clan";
$string["kickMember"] = "Kick member";
$string["leaveFromClan"] = "Leave clan";
$string["askToJoin"] = "Send join request";
$string["removeClanRequest"] = "Delete join request";
$string["joinClan"] = "Join clan";
$string["noClans"] = "There is no clans";
$string["clans"] = "Clans";
$string["alreadyInClan"] = "You're already in clan!";
$string["createClan"] = "Create clan";
$string["createdClan"] = "You successfully created clan <span style='font-weight:700;color:#%s'>%s</span>!";
$string["createClanDesc"] = "Here you can create a clan!";
$string["create"] = "Create";
$string["mainSettings"] = "Main settings";
$string["takenClanName"] = "This clan name was already taken!";
$string["takenClanTag"] = "This clan tag was already taken!";
$string["badClanName"] = "Please choose another clan name.";
$string["badClanTag"] = "Please choose another clan tag.";

$string["suggestedName"] = '<button type="button" onclick="a(\'profile/%1$s\', true, true)" class="accbtn" name="accountID">%1$s</button><text class="dltext"> suggested <b>%4$s%3$s</b> for</text><text class="levelname">%2$s</text>'; // %1$s - Mod username, %2$s - level name, %3$s - x stars, %4$s - Featured/Epic (%4$s%3$s - Featured, x stars)
$string["reportedName"] = '%1$s<text class="dltext"> was reported</text><text class="levelname">%2$s</text>';

$string['listTable'] = "Lists";
$string['listTableMod'] = "Unlisted lists";
$string['listTableYour'] = "Your unlisted lists";

$string['forgotPasswordChangeTitle'] = "Change password";
$string["successfullyChangedPass"] = "Password was successfully changed!";
$string['forgotPasswordTitle'] = "Forgot password?";
$string['maybeSentAMessage'] = "We'll send you a message if this account exists.";
$string['forgotPasswordDesc'] = "Here you can request change password link if you forgot it!";
$string['forgotPasswordButton'] = "Request link";

$string['sfxAdd'] = "Add SFX";
$string["sfxAddError-5"] = "SFX's size is higher than $sfxSize megabytes!";
$string["sfxAddError-6"] = "Something went wrong while uploading SFX!";
$string["sfxAddError-7"] = "You can only upload audio!";
$string['sfxAdded'] = 'SFX added';
$string['yourNewSFX'] = "Take a look at your new SFX!";
$string["sfxAddAnotherBTN"] = "One more SFX?";
$string["sfxAddDesc"] = "Here you can add your SFX!";
$string["chooseSFX"] = "Choose SFX";
$string["sfxAddNameFieldPlaceholder"] = "Name";
$string['sfxs'] = 'SFXs';
$string['sfxID'] = 'SFX ID';
$string['manageSFX'] = 'Manage SFXs';

$string['featureLevel'] = 'Feature level';

$string['banList'] = 'Banned people list';
$string['expires'] = 'Expires';
$string['unbanPerson'] = 'Unban';
$string['IP'] = 'IP-address';
$string['noBanInPast'] = 'You can\'t ban until past!';
$string['banSuccess'] = 'You successfully banned <b>%1$s</b> until <b>%3$s</b> in «<b>%2$s</b>»!';
$string['person'] = 'Person';
$string['youAreBanned'] = 'You were banned until <b>%2$s</b> for reason:<br><b>%1$s</b>';
$string['banChange'] = 'Change';
$string['system'] = 'System';

$string['levelComments'] = 'Level comments';
$string['levelLeaderboards'] = 'Level leaderboards';
$string['manageLevel'] = 'Manage level';
$string['noComments'] = 'No comments!';
$string['commentHere'] = 'Publish comment...';
$string['weekLeaderboards'] = 'For a week';
$string['noLeaderboards'] = 'No leaderboards!';
$string['manageLevelDesc'] = 'Here you can change level!';
$string['silverCoins'] = 'Silver coins';
$string['unlistedLevel'] = 'Unlisted level';
$string['lockUpdates'] = 'Lock updating';
$string['lockCommenting'] = 'Lock commenting';
$string['successfullyChangedLevel'] = 'You successfully changed level!';
$string['successfullyDeletedLevel'] = 'You successfully deleted level!';

$string['resendMailTitle'] = 'Send email message again';
$string['resendMailHint'] = 'Didn\'t get mail message?';
$string['resendMailDesc'] = 'Here you can send email message again if you didn\'t get it!';
$string['resendMailButton'] = 'Send message';

$string['automodTitle'] = 'Automod';
$string['possibleLevelsSpamming'] = 'Possible levels spamming';
$string['disableLevelsUploading'] = 'Disable levels uploading';
$string['possibleAccountsSpamming'] = 'Possible accounts spamming';
$string['disableAccountsRegistering'] = 'Disable registering accounts';
$string['possibleCommentsSpamming'] = 'Possible comments spamming';
$string['disableComments'] = 'Disable commenting';
$string['similarCommentsCount'] = 'Similar comments count';
$string['similarityValueOfAllComments'] = 'Similarity value out of all comments';
$string['possibleCommentsSpammer'] = 'Possible comments spammer';
$string['banCommenting'] = 'Ban commenting';
$string['spammerUsername'] = 'Spammer\'s username';
$string['possibleAccountPostsSpamming'] = 'Possible account posts spamming';
$string['disablePosting'] = 'Disable posting';
$string['similarPostsCount'] = 'Similar posts count';
$string['similarityValueOfAllPosts'] = 'Similarity value out of all posts';
$string['possibleAccountPostsSpammer'] = 'Possible account posts spammer';
$string['possibleRepliesSpamming'] = 'Possible replies spamming';
$string['possibleRepliesSpammer'] = 'Possible replies spammer';
$string['similarRepliesCount'] = 'Similar replies count';
$string['similarityValueOfAllReplies'] = 'Similarity value out of all replies';
$string['unknownWarning'] = 'Unknown warning';
$string['before'] = 'Before';
$string['after'] = 'After';
$string['compare'] = 'Compare';
$string['resolvedWarning'] = 'Resolved warning';
$string['resolveWarning'] = 'Resolve warning';
$string['enabled'] = 'Enabled';
$string['disabled'] = 'Disabled';
$string['yesterday'] = 'Yesterday';
$string['today'] = 'Today';
$string['uploading'] = 'Uploading';
$string['commenting'] = 'Commenting';
$string['leaderboardSubmits'] = 'Leaderboard submits';
$string['manageLevels'] = 'Manage levels';
$string['disableLevelsUploading'] = 'Disable levels uploading';
$string['disableLevelsCommenting'] = 'Disable levels commenting';
$string['disableLevelsLeaderboardSubmits'] = 'Disable levels leaderboard submits';
$string['disable'] = 'Disable';
$string['enable'] = 'Enable';
$string['registering'] = 'Registering';
$string['accountPosting'] = 'Making account posts';
$string['updatingProfileStats'] = 'Updating profile stats';
$string['messaging'] = 'Messaging';
$string['manageAccounts'] = 'Manage accounts';
$string['disableAccountsRegistering'] = 'Disable registering new accounts';
$string['disableAccountPosting'] = 'Disable making account posts';
$string['disableUpdatingProfileStats'] = 'Disable updating profile stats';
$string['disableMessaging'] = 'Disable messaging';

$string['cantPostCommentsAboveChars'] = 'You cannot post comments above %1$s characters!';
$string['replyingIsDisabled'] = 'Replying to comments is currently disabled!';
$string['youAreBannedFromCommenting'] = 'You are banned from commenting!';
$string['cantPostAccountCommentsAboveChars'] = 'You cannot post account comments above %1$s characters!';
$string['commentingIsDisabled'] = 'Commenting is currently disabled!';
$string['noWarnings'] = 'No warnings';

$string['downloadLevelAsGMD'] = 'Save as .gmd';

$string['songIsAvailable'] = 'Available';
$string['songIsDisabled'] = 'Not available';
$string['disabledSongs'] = 'Disabled songs';
$string['disabledSFXs'] = 'Disabled SFXs';

$string['vaultCodesTitle'] = 'Add vault code';
$string['vaultCodeExists'] = 'Code with this name already exists!';
$string['reward'] = 'Reward';
$string['vaultCodePickOption'] = 'Choose reward type';
$string['vaultCodesCreate'] = 'Create code';
$string['createNewVaultCode'] = 'Create new code!';
$string['vaultCodesDesc'] = 'Here you can create new code!';
$string['vaultCodesEditTitle'] = 'Change vault code';
$string['vaultCodesEditDesc'] = 'Here you can change already existing code!';
$string['vaultCodeName'] = 'Code';
$string['vaultCodeUses'] = 'Number of uses (0 for infinite uses)';
$string['editRewards'] = 'Change rewards';
$string['rewards'] = 'Rewards';

$string['alsoBanIP'] = 'Also ban IP';

/*
	REUPLOAD
*/

$string["reuploadBTN"] = "Upload";
$string["errorGeneric"] = "Error appeared!";
$string["smthWentWrong"] = "Something went wrong!";
$string["tryAgainBTN"] = "Try again";
//songAdd.php
$string["songAddDesc"] = "Here you can add your song!";
$string["songAddUrlFieldLabel"] = "Song URL: (Direct or Dropbox links only)";
$string["songAddUrlFieldPlaceholder"] = "Song URL";
$string["songAddNameFieldPlaceholder"] = "Name";
$string["songAddAuthorFieldPlaceholder"] = "Author";
$string["songAddButton"] = "Choose song";
$string["songAddAnotherBTN"] = "Another Song?";
$string["songAdded"] = "Song added";
$string["deletedSong"] = "You successfully deleted song";
$string["songID"] = "Song ID: ";
$string["songIDw"] = "Song ID";
$string["songAuthor"] = "Author";
$string["size"] = "Size";
$string["delete"] = "Delete";
$string["change"] = "Change";
$string["chooseFile"] = "Choose a song";
$string['yourNewSong'] = "Take a look at your new song!";
///errors
$string["songAddError-2"] = "Invalid URL";
$string["songAddError-3"] = "This song has been reuploaded already with ID:";
$string["songAddError-4"] = "This song isn't reuploadable";
$string["songAddError-5"] = "Song size is higher than $songSize megabytes";
$string["songAddError-6"] = "Something went wrong while uploading a song!";
$string["songAddError-7"] = "You can only upload audio!";

$string[400] = "Bad request!";
$string["400!"] = "Check drivers of your network hardware.";
$string[403] = "Forbidden!";
$string["403!"] = "You don't have access to this page!";
$string[404] = "Page not found!";
$string["404!"] = "Are you sure you typed address correctly?";
$string[500] = "Internal server error!";
$string["500!"] = "Coder made an mistake in the code,</br>
please say about this problem here:</br>
https://github.com/Cvolton/GMDprivateServer/pull/883";
$string[502] = "Server is down!";
$string["502!"] = "Load on the server is too big.</br>
Come back later within several hours!";

$string["invalidCaptcha"] = "Invalid captcha response!";
$string["page"] = "Page";
$string["emptyPage"] = "This page is empty!";

/*
	STATS
*/
$string["ID"] = "ID";
$string["orbs"] = "Orbs";
$string["stars"] = "Stars";
$string["coins"] = "Coins";
$string["accounts"] = "Accounts";
$string["levels"] = "Levels";
$string["songs"] = "Songs";
$string["author"] = "Creator";
$string["name"] = "Name";
$string["date"] = "Date";
$string["type"] = "Type";
$string["reportCount"] = "Report count";
$string["reportMod"] = "Reports";
$string["username"] = "Username";
$string["accountID"] = "Account ID";
$string["registerDate"] = "Register date";
$string["isAdminYes"] = "Yes";
$string["isAdminNo"] = "No";
$string["userCoins"] = "User Coins";
$string["time"] = "Time";
$string["deletedLevel"] = "Deleted Level";
$string["mod"] = "Moderator";
$string["count"] = "Amount of actions";
$string["ratedLevels"] = "Rated Levels";
$string["lastSeen"] = "Last Time Online";
$string["level"] = "Level";
$string["pageInfo"] = "Showing page %s of %s";
$string["first"] = "First";
$string["previous"] = "Previous";
$string["next"] = "Next";
$string["never"] = "Never";
$string["last"] = "Last";
$string["go"] = "Go";
$string["levelid"] = "Level ID";
$string["levelname"] = "Level name";
$string["leveldesc"] = "Level description";
$string["noDesc"] = "No description";
$string["levelpass"] = "Password";
$string["nopass"] = "No password";
$string["unrated"] = "Unrated";
$string["rate"] = "Rate";
$string["stats"] = "Stats";
$string["suggestFeatured"] = "Featured?";
$string["whoAdded"] = "Who added?";
$string["moons"] = "Moons";

$string["banDesc"] = "Here you can ban a player!";
$string["playerTop"] = 'Top of players';
$string["creatorTop"] = 'Top of creators';
$string["levelUploading"] = 'Uploading levels';
$string["successfullyBanned"] = 'Player <b>%1$s</b> with account ID <b>%2$s</b> was successfully banned!';
$string["successfullyUnbanned"] = 'Player <b>%1$s</b> with account ID <b>%2$s</b> was successfully unbanned!';
$string["commentBan"] = 'Commenting';

$string["player"] = "Player";

$string["starsLevel2"] = "stars";
$string["starsLevel1"] = "stars";
$string["starsLevel0"] = "star";
$string["coins1"] = "coins";
$string["coins0"] = "coin";
$string["unban"] = "Unban";
$string["isBan"] = "Ban";

$string["noCoins"] = "Without coins";
$string["noReason"] = "No reason";
$string["noActions"] = "No actions";
$string["noRates"] = "No rates";

$string["future"] = "Future";

$string["spoiler"] = "Spoiler";
$string["accid"] = "with account ID";
$string["banned"] = "was successfully banned!";
$string["unbanned"] = "was successfully unbanned!";
$string["ban"] = "Ban";
$string["nothingFound"] = "This player doesn't exist!";
$string["banUserID"] = "Username or account ID";
$string["banUserPlace"] = "Ban a user";
$string["banYourself"] = "You can't ban yourself!"; 
$string["banYourSelfBtn!"] = "Ban someone else";
$string["banReason"] = "Ban reason";
$string["action"] = "Action";
$string["value"] = "1st value";
$string["value2"] = "2nd value";
$string["value3"] = "3rd value";
$string["modAction1"] = "Rated a level";
$string["modAction2"] = "Un/featured a level";
$string["modAction3"] = "Un/verified coins";
$string["modAction4"] = "Un/epiced a level";
$string["modAction5"] = "Set as daily feature";
$string["modAction6"] = "Deleted a level";
$string["modAction7"] = "Creator change";
$string["modAction8"] = "Renamed a level";
$string["modAction9"] = "Changed level password";
$string["modAction10"] = "Changed demon difficulty";
$string["modAction11"] = "Shared CP";
$string["modAction12"] = "Un/published level";
$string["modAction13"] = "Changed level description";
$string["modAction14"] = "Enabled/disabled LDM";
$string["modAction15"] = "Leaderboard un/banned";
$string["modAction16"] = "Song ID change";
$string["modAction17"] = "Created a Map Pack";
$string["modAction18"] = "Created a Gauntlet";
$string["modAction19"] = "Changed song";
$string["modAction20"] = "Granted a moderator to player";
$string["modAction21"] = "Changed Map Pack";
$string["modAction22"] = "Changed Gauntlet";
$string["modAction23"] = "Changed quest";
$string["modAction24"] = "Reassigned a player";
$string["modAction25"] = "Created a quest";
$string["modAction26"] = "Changed player's username/password";
$string["modAction27"] = "Changed SFX";
$string["modAction28"] = "Banned person";
$string["modAction29"] = "Locked/unlocked level updating";
$string["modAction30"] = "Rated list";
$string["modAction31"] = "Sent list";
$string["modAction32"] = "Un/featured list";
$string["modAction33"] = "Un/published list";
$string["modAction34"] = "Deleted list";
$string["modAction35"] = "Changed list's creator";
$string["modAction36"] = "Changed list's name";
$string["modAction37"] = "Changed list's description";
$string["modAction38"] = "Locked/unlocked level commenting";
$string["modAction39"] = "Locked/unlocked list commenting";
$string["modAction40"] = "Removed sent level";
$string["modAction41"] = "Suggested level";
$string["modAction42"] = "Created vault code";
$string["modAction43"] = "Changed vault code";
$string["modAction44"] = "Set level as event level";
$string["everyActions"] = "Any actions";
$string["everyMod"] = "All moderators";
$string["Kish!"] = "Go away!";
$string["noPermission"] = "You don't have permission!";
$string["noLogin?"] = "You are not logged into your account!";
$string["LoginBtn"] = "Login into account";
$string["dashboard"] = "Dashboard";
$string["userID"] = 'User ID';
