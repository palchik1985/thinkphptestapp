/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : thinkphp

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 08/01/2020 15:59:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for apps
-- ----------------------------
DROP TABLE IF EXISTS `apps`;
CREATE TABLE `apps`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prompt` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `platform_id` int(11) UNSIGNED NOT NULL,
  `link` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image_link` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of apps
-- ----------------------------
INSERT INTO `apps` VALUES (23, 'Instagram', 'Общайтесь на языке изображений — Instagram от Facebook\r\n\r\nПодписывайтесь на обновления друзей, делитесь всеми моментами дня и открывайте для себя мир. Откройте для себя сообщество, где всем рады.\r\n\r\nДелитесь впечатлениями и общайтесь с друзьями\r\n\r\n* Создавайте из фото и видео истории, исчезающие через 24 часа, и делайте их ещё интереснее с помощью наших инструментов оформления.\r\n* Отправляйте сообщения в Direct. Переписывайтесь с друзьями о том, что вам понравилось в ленте и Stories.\r\n* Публикуйте в ленте фото и видео, которые вы хотите видеть в своем профиле.\r\n\r\nСмотрите видео, подобранные специально для вас\r\n\r\n* Смотрите более длинные видео от любимых авторов в разделе IGTV.\r\n* Вдохновляйтесь фото и видео новых аккаунтов в разделе интересного.\r\n* Открывайте для себя новые бренды и совершайте покупки.\r\n', 1, 'https://storage.evozi.com/apk/dl/16/09/04/com.instagram.android.apk?h=ahGNyvZqGOIXaSnjNyonSA&amp;t=1578491456&amp;vc=188791643', 'https://lh3.googleusercontent.com/2sREY-8UpjmaLDCTztldQf6u2RGUtuyf6VT5iyX3z53JS4TdvfQlX-rNChXKgpBYMw=s180-rw', 1);
INSERT INTO `apps` VALUES (24, 'Messenger', 'Общайтесь с помощью текстовых сообщений, в видеочате или групповых переписках.\r\n\r\n* ОТПРАВЛЯЙТЕ СООБЩЕНИЯ. Отправляйте людям сообщения без предварительного обмена телефонными номерами. Эта функция доступна на разных устройствах!\r\n* ТЁМНАЯ ТЕМА НЕ СЛЕПИТ ГЛАЗА. Тёмная тема — это элегантный новый дизайн, который снижает нагрузку на глаза за счет того, что белый фон в нем заменен на черный.\r\n* ДЕЛИТЕСЬ ЭМОЦИЯМИ. Добавляйте смешные наклейки, смайлики и отправляйте файлы GIF, чтобы выразить ваши эмоции.\r\n* ДЕЛИТЕСЬ ФОТО И ВИДЕО. Делайте фото с помощью камеры Messenger, добавляйте фильтры или рисунки, отправляйте их друзьям или публикуйте в историях!\r\n* ОБЩАЙТЕСЬ В ГРУППОВОМ ЧАТЕ. Создавайте опросы, чтобы планировать встречи с друзьями, делитесь данными о своем местоположении, делите общие счета и не только.\r\n* ИСПОЛЬЗУЙТЕ ГОЛОСОВЫЕ ВЫЗОВЫ И ВИДЕОЧАТ. Где бы вы ни были, общайтесь с друзьями и коллегами с помощью голосовых вызовов или группового видеочата (с возможностью добавления фильтров). **Бесплатные вызовы через Wi-Fi. При использовании мобильного трафика применяются стандартные тарифы.\r\n* ОТПРАВЛЯЙТЕ ГОЛОСОВЫЕ СООБЩЕНИЯ. Записывайте и отправляйте голосовые сообщения, чтобы сэкономить время.\r\n* ОТПРАВЛЯЙТЕ ДЕНЬГИ УДОБНЫМ И БЕЗОПАСНЫМ СПОСОБОМ (функция доступна только в США, Великобритании и Франции). Отправляйте и получайте деньги через приложение, добавив свою дебетовую карту или счет PayPal*. *PayPal поддерживается только в США.\r\n* ОТПРАВЛЯЙТЕ СВОЕ МЕСТОПОЛОЖЕНИЕ. Предлагайте друзьям места для встреч или делитесь своим местоположением.\r\n* ОБЩАЙТЕСЬ В ЧАТЕ С КОМПАНИЯМИ. Связывайтесь с компаниями, делайте заказы, получайте поддержку, ищите выгодные предложения и многое другое.\r\n* ИГРАЙТЕ С ДРУЗЬЯМИ. Находите интересные игры, соревнуйтесь с друзьями и занимайте призовые места.\r\n* SMS В MESSENGER: оставайтесь на связи в одном приложении. Одно приложение для переписок и SMS.', 1, 'https://play.google.com/store/apps/details?id=com.facebook.orca', 'https://lh3.googleusercontent.com/rkBi-WHAI-dzkAIYjGBSMUToUoi6SWKoy9Fu7QybFb6KVOJweb51NNzokTtjod__MzA=s180-rw', 1);
INSERT INTO `apps` VALUES (25, 'Minion Rush', 'БОЛЕЕ 900 МИЛЛИОНОВ ИГРОКОВ ПО ВСЕМУ МИРУ ИГРАЮТ В MINION RUSH. ПОРА И ВАМ ПОУЧАСТВОВАТЬ В ЭТОЙ ГАДКОМ ПРИКЛЮЧЕНИИ!\r\n\r\n\r\nНатягивайте любимые кеды – забег в Minion Rush начинается. Осмельтесь зайти в Логово Грю, исследуйте его самые таинственные закуточки и отправляйтесь в маниакальные миссии по всему миру. Бегайте, прыгайте, катитесь, уклоняйтесь и откройте коллекцию непревзойденно гадких костюмов.\r\n\r\n\r\nБЕГИТЕ ВМЕСТЕ С ЛЮБИМЫМИ МИНЬОНАМИ\r\n\r\n• Начнете забег с любимым миньоном Дэйвом и пройдите увлекательные скоростные миссии.\r\n\r\n• Соберите больше карт костюмов и откройте других миньонов – Карла, Джерри и Мэла.\r\n\r\n\r\nЛОГОВО ГРЮ\r\n\r\n• Исследуйте разные комнаты – каждая ведет к уникальным беговым миссиям или игровым акциям.\r\n\r\n• Выполните миссии в каждой комнате, откройте призы и новые комнаты.\r\n\r\n', 2, 'https://apps.apple.com/ru/app/minion-rush/id596402997', 'https://is4-ssl.mzstatic.com/image/thumb/Purple113/v4/27/f6/74/27f67491-c05f-a532-d4b3-90be72d680f2/AppIcon-0-1x_U007emarketing-0-0-85-220-0-7.png/230x0w.png', 1);
INSERT INTO `apps` VALUES (26, 'Angry Birds 2', 'Get ready for the Angry Birds 10 Year Anniversary with a batch of time limited events!\r\n\r\n\r\nPlay the world\'s best bird flinging, pig popping game!\r\n\r\n\r\nUse the slingshot to fling birds at the piggies\' towers and bring them crashing down – all to save the precious eggs.\r\n\r\n\r\nNew to the world of Angry Birds? Angry Birds 2 is the best way to get to know all of the iconic characters and experience the fun gameplay that has captured the hearts (and spare time) of millions of players.\r\n\r\n\r\nDecorated Angry Birds veteran? Everything you love about classic Angry Birds games is here with some awesome new additions. Choose which bird to fling when, play with friends, take on multi stage levels, and compete and collaborate with players around the globe.\r\n\r\n\r\nFeatures:\r\n\r\n● CHOOSE YOUR BIRD. Choose which bird to put in the slingshot and defeat the pigs with strategy!\r\n\r\n● MULTI-STAGE LEVELS. Play fun, challenging levels with multiple stages – just watch out for those Boss Pigs!\r\n\r\n● DAILY CHALLENGES. Have a minute? Complete a daily challenge and earn some quick rewards.', 2, 'https://apps.apple.com/ru/app/angry-birds-2/id880047117', 'https://is4-ssl.mzstatic.com/image/thumb/Purple113/v4/bb/65/44/bb654484-630f-51fc-e95d-134be3d3758e/AppIcon-0-0-1x_U007emarketing-0-0-0-7-0-0-85-220.png/230x0w.png', 1);
INSERT INTO `apps` VALUES (28, 'Ice Age Village', 'Discover one of the greatest successes on the App Store and embark on a delightful journey through the Ice Age universe! Build a new home for Sid, Manny and Diego -- and our favorite nutty little animal, Scrat, of course! There\'s so much to discover above and beneath the ice!\r\n\r\n***** &quot;Awesome! This game is cute, charming, and most of all fun. It’s a nice bright change from others in this genre&quot; (Customer review, Cameron Fitzwater)\r\n\r\n***** &quot;Graphically, Ice Age Village is one of the better looking games of its kind&quot; (Appgamer.net - 8/10)\r\n\r\n√ Immerse yourself in the unique world of Ice Age!\r\n\r\n√ Explore Dino World, a place full of colossal fun!\r\n\r\n√ Play exciting mini-games like Kung Fu Scrat and Sid\'s Egg Rescue!\r\n\r\n√ Participate in a variety of events in your bustling Village!\r\n\r\n√ Visit your friends\' Villages and the herd\'s too!\r\n', 1, 'https://apps.apple.com/us/app/ice-age-village/id467577200', 'https://is2-ssl.mzstatic.com/image/thumb/Purple113/v4/e7/7f/a7/e77fa72b-864f-e18e-d53a-c33a8cfc0d68/AppIcon-0-1x_U007emarketing-0-85-220-0-10.png/246x0w.png', 1);

-- ----------------------------
-- Table structure for platforms
-- ----------------------------
DROP TABLE IF EXISTS `platforms`;
CREATE TABLE `platforms`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of platforms
-- ----------------------------
INSERT INTO `platforms` VALUES (1, 'Android');
INSERT INTO `platforms` VALUES (2, 'IOS');

SET FOREIGN_KEY_CHECKS = 1;
