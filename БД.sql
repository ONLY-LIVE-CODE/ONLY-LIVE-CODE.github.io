-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2016 г., 21:13
-- Версия сервера: 5.6.31
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jistselle`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `sort` smallint(11) NOT NULL,
  `show` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `sort`, `show`) VALUES
(5, 'Ключи', 'test', 1, 1),
(6, 'Испытай удачу', 'test', 2, 1),
(7, 'Аккаунты', 'test', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('445e3691614c4f7726b6f77e28ec459f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.134 Safari/537.36 u01-04', 1479663323, 'a:5:{s:4:"name";s:5:"admin";s:5:"email";s:15:"mrgreezly@bk.ru";s:2:"id";s:2:"45";s:5:"group";s:1:"1";s:8:"loggedin";b:1;}');

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE IF NOT EXISTS `coments` (
  `id` int(11) unsigned NOT NULL,
  `parent_id` int(11) unsigned NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `item` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `config_data`
--

CREATE TABLE IF NOT EXISTS `config_data` (
  `key` varchar(255) NOT NULL,
  `value` varchar(4096) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `config_data`
--

INSERT INTO `config_data` (`key`, `value`) VALUES
('metadescr', 'Good-Acc.ru - Магазин лицензионных ключей и аккаунтов  для Steam, у нас вы можете купить аккаунты Clash of Clans Cs Go Wot .Магазин отличается от магазина аккаунтов лололошки ивангая лололошка шоп ивангай мистик шоп сахар шоп dimikey тем что в нашем магазине аккаунтов можно купить аккаунт Clash of Clans дешего One Shop Магазин лололошки ивангая лололошка шоп ивангай eeoneguy shop lololoshka shop В нашем магазине аккаунтов, можно купить steam аккаунт дешево, наш магазин аккаунтов имеет популярные сервисы оплаты. Предлагаем вам купить steam аккаунт дешево у нас! В наличии всегда есть аккаунты steam у нас возможно купить аккаунт warface. Кроме этого всегда возможно купить аккаунт world of tanks. Еще у нас имеются ключи steam дешево. Магазин лололошки ивангая лололошка шоп ивангай. У нас очень большой ассортимент аккаунтов steam. Вы можете купить ключи steam дешево. В нашем магазине, можно выбрать аккаунт steam. Самое приятное у нас всегда моментальная доставка! Предоставим возможность купить аккаунт warface или купить аккаунт world of tanks. Самое важное и главное, при возникновении проблем возвратим деньги! Кроме перечисленного выше легко взять и купить аккаунт minecraft или купить аккаунт origin. У нас с легкостью просто купить аккаунт minecraft. Любителям серий battlefield предоставлена возможность купить аккаунт origin. У нас вы можете купить аккаунт clash of clans на ios  120 лвл android  10 тх или 11 тх купить steam ключи, магазин ключей steam игр, купить стим игры, магазин компьютерных игр, купить дешевые игры по низким ценам, купить ключ активации, steam стим игры бесплатно, дешевые онлайн игры для pc, магазин steam, купить онлайн игры, купить кс го дешево, купить дота,магазин аккаунтов магазин аккаунтов steam Интернет-магазин, покупка игр, dimikeys.com, steam, origin, wot, minecraft, ключи'),
('site_name', 'Good-Acc.Ru - Магазин лицензионных ключей и аккаунтов  для Steam, Origin, Uplay, Minecraft и других платформ.'),
('site_pqiwi', '1'),
('site_pyandex', '1'),
('elegant_logo', 'http://fullhack.ru/templates/admin/images/logo.png'),
('elegant_kontakt', ''),
('elegant_info', 'gоооо'),
('elegant_read', 'ggg'),
('premium_fon', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDA8NDBANDQ0MDA8NDA0NDA8NDA0NFBEWFhQRFBQYHCggGBolHBQUITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0NDgwMDysZFBkrNyw3LDcrKywsLCwsNzc3KywrKzc3LCsrKysrLCsrKyssKysrKywrKzcrKysrKysrK//AABEIAKgBLAMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAACAwQBAAUGB//EABoQAQEBAQEBAQAAAAAAAAAAAAACAQMREhP/xAAXAQEBAQEAAAAAAAAAAAAAAAABAAID/8QAFhEBAQEAAAAAAAAAAAAAAAAAABEB/9oADAMBAAIRAxEAPwD8tFjsxuY7uNbmDzGZg5xAU4bGBnDZxAc4bOBjDolAU4dOBiTplB0yZktmTMlDQZIskzIFkpF5g8kWSPJKDOGzjpkyZCFGHxhcYdGM6sMnDcwEmYy0IOiDoRVpuii9S9NOJL11H1V9dRddbwJeqTop66l6a0U/RPZ16RZJNF0ZRVJA0Gj0GprA6xusCXZgswWYLMQZmGTLZkyZQdMnRLIk+JAdEnxLohREJMiDpgcQfHMAuYMyDp5mZzVRGcxZCjObfzVCf4FkH/m34VROQOZM+W5KqZOGyHMHgQ5Hml431kj9BWs2i6pFnTU3TTLpL0ognrqLrqjrSTrTWJP11L00/pqXprRJ6ans6ybJKouh0Cki9Do9BqawOsEHwJ62SPJbkjmUyyZNiWzJ0Sg6JP5w7nCnnATo5qefNvPmq582aARzURzM58lMcmaSJ5mzyUzyMzkqkucm/mrzm781VEf5u/NXvMOwqIl+GfKjZBslQrxwtwGoN9ZtA2gbSI6ourBVlXaTbtN0pt2n6U0gdaSdNN6UnvSiemprPvSLJIsmjqKrCSqL02sBuJFaHTNwO4iBngtxniNe5kmTLckyZTm6JPiHRCjnATecKuXMPKFfLmzqFz5q+XNnLms5c2N0s581Mcxc4URDFMLnmZnM6YHkCmJ/zdsKvhmwqok2C6hZUlVJoiOpKrFdyReNUJawqj7xPbTOl1pVUK9IvSmVRNW66KuimXRF0KtJrSQXpF6bRVFE0TR9YVWFEVhVYorC6xFPWA3D6wG4iRuB3DdkO4kV4zwzcZ4i+hmTYl0ydEpzbEqecg5yq5SzqM5Qr5QXylZyljSbyhXzgvlKrnLnrWD5woiQxJ8Yy06ZHktnB5gIPlmyZ4zcSIqSqxRRV40NS3ifpiu8T9MaxnUfTE3RX0xL0xrGdS9E3TVPTE1t4CL0mtOsmiiqL03cBuFFbhe4duB2Uk+yXsqtkGwilqS6lVUF1JSXZL2VVSVUop9kG4fuA3EiNxnhu4HwwvpZk6JZMnRLLmPnKrnJfOVPKWdR3KVnKSOUq+eMa1h/PFMYTzxRDGtYdGGyXBmM60bgi80XoIvQ671m6kGiqMrS6IJtP0U2ReNYyj6Yl64t6Ym6S3jOoemJ+mLekp7lrAivCqlXcFVDSTbIdlRsM+Ek3yzYU/DPhJLsB2FewCoSR1BVQuqCqgpDUFVK24IqSakqS9lVUlVJxJ9wPh2yDxF9RMnRLJk6JZYM5yp5yVGKeeM6juWKueE88UxjnrWHRh8kwbLLR0mZpODzWSb630vNb6jR+s9D65Ku3QaJmkFUVWH7gKwhLcp7lbUk3BzQguE9w9G+ZNc2qzHn1zKrm9CuRe8mqEO8w/mt/Nn5qpH+bPzW/mz81Ui3mDea7eYK5mpBUE3D0L5kXzKefcEXD0LhPcFIbkmpWXBNycKXZB8qKkHwTX1EydEsmTYllgcSp54VEqeeMaTYw+MKjD4xjWsNkyQSPGWh4LNDgsCE5mNxFrXZjfEmO8FmCyUivGbJ/wAu+Eol2AVzWbzDvNVRBXMuuT0d5A3kaI82uJe8npbyBvE0R528g7yejvEO8jVHn7yD+T0N5B3kqI8/eRdcno7yLrkao82+ZF83p3yI6cjmh5XTmn6c3q9OSbpybzQ8u+ZFw9LpyT3zKefUA2Ftcy/zaqfRTJsy6ZNmXMCjD4wESfGM6Rxh04CcNnGdaHODxkjzGWm4LMdmCzAmeCzG5gslFmYLJFkmZKIMkeSPJMyBSVkCyDsgeQKom/N35q85t/NUxFvIO8l/5s3kqo8/eIN4vR3kHeSojzt4g3i9LeQd5GqPN3iHeT0d4h3iaI82uRdcnpVxBXFUR5V8SL4vXriRfFrNEeN04punF7fTgm6cGs1mPE6cU18XtdOCbpwbzWXkVyL/ACepfEreLVT0ckyZFkjmWKnRh04ycNnGWsFOGzgZwycZ0inB5jJwzMZLsweY7MMzE0zJHktnDJkFkyZMimTJkIMyZMDmTJkNQEwZkDmDMgGFZAsg7IHkIp/zZ+ar4d8JJd5h3ms+GfCERbzDvJbvNm80oh3kHeS7eYd5kRBvIFcnobzBvNVR5tcSr4vTrkVXI0R5V8U/Ti9i+RF8WqzHi9OCfpwe1fFPfFrNZ3Hi3wK3g9i+JW8WqzEuSOcc5DDJwycc4a0ZOGZjnMkzMMnGOBw2cMnHODRk4bOOcyTJw2Zc5E2ZNmXOBNmR5LnAjyR5LnIt8b8uck75Z8uckzZZ8uckHZD8NcQHYBsOckDYLqHOQKqCb5ucRpF8yL5uc1jJF8i95ucRH//Z'),
('templates', '1'),
('unitpay_status', '0'),
('unitpay_address', ''),
('site_pwebmoney', '1'),
('site_pinfo', '0'),
('site_counters', '0'),
('wmid', ''),
('wmk_file', ''),
('WMR', ''),
('WMZ', ''),
('wm_key_date', ''),
('wm_pass', 'Z5F4cifYT2H/xd2xLgoa958xwgH0xGyQZO6bZ8PB7mGt9Z1pZgLjVB1rmFjpe1o+obOUr0xRqO6Oge+iZmuaxw=='),
('qiwi_pass', 'f5QzXjQf3vPAEQCmZBqSEAjETf9SnMoxdcqObUdgNYxyu7eDYW7uqrWdlK0aXW252TlOOILiw6t/R8Yzlqhb3A=='),
('yad_client_id', 'B8BDAE677F77F7B433E362039A25E4F5D2B3C8BCDE1C8A0023DC13F4CC8F63EE'),
('premium_logo', 'http://fullhack.ru/templates/admin/images/logo.png'),
('yad_token', '558387DE51DF40F274669449A309307B731777061EBB286B7B428C3C17A4C91C3C8B58BDEF57C4A0102CA19CC5B68AC985D54E6AD0E27BB16422ABA3F314948223941647F98B8BCDBD247BB0C9EE50736BFC3663F0916496B9C858569AC13E840CF21098E07B8C69F2E757D077CD9FB2E09DFA05395FBE6AA7D3664E467D176F'),
('elegant_onas', 'ТЕст'),
('yad_wallet', ''),
('ppblok', '1'),
('wmid_n', '0'),
('kblok', '1'),
('site_ppkolvo', '1'),
('site_tptovar', '0'),
('vptsite', '0'),
('site_infokontakt', '0'),
('ppcolor', '#2a9fd6'),
('pplimit', '3'),
('qiwi_num', '79225024150'),
('premium_logoz', 'http://fullhack.ru/templates/admin/images/logo.png'),
('mamba_logo', 'http://fullhack.ru/templates/admin/images/logo.png'),
('boxy_ащт', ''),
('elegantfon', 'https://9oboev.ru/pic/201306/800x600/9oboev.ru-2691.jpg'),
('universal_logo', ''),
('universal_onas', '<span class="wysiwyg-color-red"><b>Тест</b></span>'),
('universal_kontakt', 'Тест'),
('universal_fon', 'Тест'),
('mamba_fon', 'http://012.bxpay.ru/img/012_bg_shop.png'),
('banner_lev', ''),
('banner_niz', ''),
('boxy_logo', 'http://fullhack.ru/templates/admin/images/logo.png'),
('tags', 'Good-Acc.ru - Магазин лицензионных ключей и аккаунтов  для Steam, у нас вы можете купить аккаунты Clash of Clans Cs Go Wot .Магазин отличается от магазина аккаунтов лололошки ивангая лололошка шоп ивангай мистик шоп сахар шоп dimikey тем что в нашем магазине аккаунтов можно купить аккаунт Clash of Clans дешего One Shop Магазин лололошки ивангая лололошка шоп ивангай eeoneguy shop lololoshka shop В нашем магазине аккаунтов, можно купить steam аккаунт дешево, наш магазин аккаунтов имеет популярные сервисы оплаты. Предлагаем вам купить steam аккаунт дешево у нас! В наличии всегда есть аккаунты steam у нас возможно купить аккаунт warface. Кроме этого всегда возможно купить аккаунт world of tanks. Еще у нас имеются ключи steam дешево. Магазин лололошки ивангая лололошка шоп ивангай. У нас очень большой ассортимент аккаунтов steam. Вы можете купить ключи steam дешево. В нашем магазине, можно выбрать аккаунт steam. Самое приятное у нас всегда моментальная доставка! Предоставим возможность купить аккаунт warface или купить аккаунт world of tanks. Самое важное и главное, при возникновении проблем возвратим деньги! Кроме перечисленного выше легко взять и купить аккаунт minecraft или купить аккаунт origin. У нас с легкостью просто купить аккаунт minecraft. Любителям серий battlefield предоставлена возможность купить аккаунт origin. У нас вы можете купить аккаунт clash of clans на ios  120 лвл android  10 тх или 11 тх купить steam ключи, магазин ключей steam игр, купить стим игры, магазин компьютерных игр, купить дешевые игры по низким ценам, купить ключ активации, steam стим игры бесплатно, дешевые онлайн игры для pc, магазин steam, купить онлайн игры, купить кс го дешево, купить дота,магазин аккаунтов магазин аккаунтов steam Интернет-магазин, покупка игр, dimikeys.com, steam, origin, wot, minecraft, ключи,Магазин аккаунтов'),
('perfect_logo', 'https://leto22e.storage.yandex.net/rdisk/70db9ea47b4253cfccf94fc95da726d6278c70b22d7a98e1576083b69d33f8de/inf/J7emSFqmghYx3PIDzypI80MKw2kX1n4aFP2yAT9W7fGXnQzbsQQJaXkTVEuN1q-wwX9sd-llt_HSCn0cGMIbgg==?uid=0&filename=logo.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&rtoken=b478db4ff7ccfbd96c697c68742d6ce6&force_default=no'),
('perfect_fon', 'http://i.imgur.com/OHTAYGt.jpg'),
('boxy_fon', 'http://012.bxpay.ru/img/012_bg_shop.png'),
('icobuy', 'http://newabuy.ru/Buy.png'),
('yadok', ''),
('WMU', '0'),
('WME', '0'),
('qiwiok', ''),
('wmrok', ''),
('wmzok', ''),
('wmuok', ''),
('wmeok', ''),
('game_fon', 'http://fullhack.ru/templates/Game/images/image.jpg'),
('game_logo', 'http://fullhack.ru/templates/admin/images/logo.png'),
('lite_kontakt', 'ваши данные'),
('lite_logo', '/hdd.jpg'),
('rk_login', 'Good-Acc.su'),
('rk_status', '1'),
('rk_password1', 'uv7hEvWFQNG6B0FY4nb0'),
('rk_password2', 'LVO5k7qkKtfiHr93Md7d'),
('buygoods', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `descr` text NOT NULL,
  `descrdop` text NOT NULL,
  `iconurl` varchar(255) NOT NULL,
  `price_rub` varchar(256) NOT NULL,
  `price_dlr` varchar(256) NOT NULL,
  `price_final` varchar(256) NOT NULL,
  `type_Item` text NOT NULL,
  `skidka` varchar(256) NOT NULL,
  `janr` text NOT NULL,
  `yazuk` text NOT NULL,
  `platforma` text NOT NULL,
  `mylytplayeer` text NOT NULL,
  `relyz` text NOT NULL,
  `izdatel` text NOT NULL,
  `atkiv` text NOT NULL,
  `viewed` varchar(255) NOT NULL DEFAULT '0',
  `min_order` int(10) NOT NULL,
  `sell_method` tinyint(1) NOT NULL,
  `goods` text NOT NULL,
  `onmain` smallint(5) DEFAULT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  `foto4` varchar(255) NOT NULL,
  `goods_shadow` text,
  `newabuy2_fon` text,
  `note` varchar(25) DEFAULT NULL,
  `fon` text,
  `price_yad` varchar(256) DEFAULT NULL,
  `price_qiwi` varchar(256) DEFAULT NULL,
  `discount` varchar(256) DEFAULT NULL,
  `discount_pct` varchar(256) DEFAULT NULL,
  `goodspeople` varchar(256) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `category`, `rank`, `name`, `descr`, `descrdop`, `iconurl`, `price_rub`, `price_dlr`, `price_final`, `type_Item`, `skidka`, `janr`, `yazuk`, `platforma`, `mylytplayeer`, `relyz`, `izdatel`, `atkiv`, `viewed`, `min_order`, `sell_method`, `goods`, `onmain`, `foto1`, `foto2`, `foto3`, `foto4`, `goods_shadow`, `newabuy2_fon`, `note`, `fon`, `price_yad`, `price_qiwi`, `discount`, `discount_pct`, `goodspeople`) VALUES
(25, 6, 0, 'GOLD RANDOM STEAM KEY', 'После оплаты Вы моментально получите ключ для игрs активируемой в STEAM! Все игры покупаются легально у поставщиков! Поэтому мы даем 100% гарантию! Это только не большой пример игр которые уже вас ждут! GTA V Dead Island Riptide Evolve + DLC Alien: Isolation Игры серии Batman Игры серии Call of Duty(Black Ops II, Ghost, Advanced Warfare ) Alan Wake Darksiders 2 Portal 2 CS GO Prototype 2 Sniper Elite 3 The Evil Within The Elder Scrolls V: Skyrim Wolfenstein: The Old Blood и многие другие! НА ЗАМЕТКУ: 1. Возможно повторение игр несколько раз. 2. Если при активации в Steam появилось сообщение "У Вас уже есть этот продукт", значит игра у Вас уже есть, а ключ остается рабочим - его можно активировать на другом аккаунте Steam. 3. Возврата денег за рабочий товар или замены ключей на другие - нет.(Если вам попалась игра которая у вас уже есть!) 4. Это не Steam Gifts, это ключ. 5. Мы не несем ответственность на распродажи и временные скидки в системе Steam, если игра которая вам попалась в данный момент стоит дешевле чем вы ее купили у нас, помните вы купили КЛЮЧ а не ГИФТ. АКТИВАЦИЯ: 1. Необходимо скачать и установить Steam (если еще не установлен). 2. Зарегистрировать новый аккаунт в Steam или зайти в существующий. 3. Перейти в раздел «Мои игры» и выбрать «Активировать через Steam…», ознакомится и согласиться с соглашением подписчика службы Steam и ввести ключ полученный сразу после оплаты. 4. Игра появиться в списке игр и вы сможете скачать её со Steam.', '', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', '40.00', '0', '40.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(26, 6, 0, 'SILVER RANDOM STEAM KEY', 'После оплаты Вы моментально получите ключ для игрs активируемой в STEAM! Все игры покупаются легально у поставщиков! Поэтому мы даем 100% гарантию! Это только не большой пример игр которые уже вас ждут! ALIEN: ISOLATION, Aliens: Colonial Marines, Assassins Creed 4 IV Black Flag, Batman: Arkham Asylum GOTY, Batman: Arkham City GOTY , Batman: Arkham Origins , Blood Bowl: Chaos Edition, Borderlands 2 , Borderlands: The Pre-Sequel,Bound by flame, Brink , Call of Duty Black Ops 2, Crysis 3, Darksiders II 2, Dead Rising 2: Off The Record ,Deadpool,Deus Ex: Human Revolution, Dishonored, Divinity 2 - Developer´s Cut, Etherium, Euro Truck Simulator , Evolve, FAR CRY 4, FIFA Manager 14,Formula 1 2013,Ghost Recon:Future Soldier, Goat Simulator, God Mode, Grey Goo: War is Evolving , LEGO Batman 3. Beyond Gotham, Lord of the Rings: War in the North, Lords Of The Fallen, Mafia II ,Metro 2033 Redux, Metro: Last Light Redux , Mortal Kombat Kollection , Murdered: Soul Suspect, NETHER , Omerta - City of Gangsters, Orcs Must Die! GOTY, Portal 2,Prototype 2+DLC RADNET , Remember me Steam , Risen 2:DarkWaters, Risen 3 - Titan Lords , Sacred 3, Saints Row IV 4, Serious Sam HD:The Second Encounter, Sleeping Dogs Definitive Edition,Sniper Elite 3 , Sniper Elite V2, Stronghold 3, The Evil Within, The Vanishing of Ethan Carter, The Witcher 2: Assassins of Kings , THIEF 2014, Total War SHOGUN 2, Total War: ATTILA, Trials Evolution Gold Edition,UNREAL TOURNAMENT 3 BLACK EDITION , Wargame: AirLand Battle , X Rebirth , Ил-2 IL 2 Штурмовик: Битва за Сталинград ,Меч и Магия. Герои III. Возрождение Эрафии. HD Edition и многие другие! НА ЗАМЕТКУ: 1. Возможно повторение игр несколько раз. 2. Если при активации в Steam появилось сообщение "У Вас уже есть этот продукт", значит игра у Вас уже есть, а ключ остается рабочим - его можно активировать на другом аккаунте Steam. 3. Возврата денег за рабочий товар или замены ключей на другие - нет.(Если вам попалась игра которая у вас уже есть!) 4. Это не Steam Gifts, это ключ. 5. Мы не несем ответственность на распродажи и временные скидки в системе Steam, если игра которая вам попалась в данный момент стоит дешевле чем вы ее купили у нас, помните вы купили КЛЮЧ а не ГИФТ. АКТИВАЦИЯ: 1. Необходимо скачать и установить Steam (если еще не установлен). 2. Зарегистрировать новый аккаунт в Steam или зайти в существующий. 3. Перейти в раздел «Мои игры» и выбрать «Активировать через Steam…», ознакомится и согласиться с соглашением подписчика службы Steam и ввести ключ полученный сразу после оплаты. 4. Игра появиться в списке игр и вы сможете скачать её со Steam.', '', 'http://cs627621.vk.me/v627621203/44b36/2gsRIuxdZ1k.jpg', '30.00', '0', '30.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(27, 6, 0, 'BRONZE RANDOM STEAM KEY', 'После оплаты Вы моментально получите ключ для игрs активируемой в STEAM! Все игры покупаются легально у поставщиков! Поэтому мы даем 100% гарантию! Это только не большой пример игр которые уже вас ждут! Arma II ARMA II: DayZ Mod ARMA II: Operation Arrowhead ARMA Tactics ARMA: Cold War Assault ARMA: Gold Edition Arma I Bad Hotel Red Orchestra 2 Call of Duty : Ghosts Resident Evil 6 Sniper Elite: Nazi Zombie Army Borderlands 2 Aliens: Colonial Marines Mass Effect 2 Mafia 2 BioSock Infinite Dead Island Reptide Left 4 Dead Batman™: Arkham Asylum GOTY Batman™: Arkham City GOTY Batman™: Arkham Origins DLC Cities in Motion 2 Dwarfs!? F.E.A.R. F.E.A.R. 2: Project Origin F.E.A.R. 3 Garry´s Mod Gemini Rue Gotham City Impostors: Professional Kit Guardians of Middle-earth Guardians of Middle-earth: Smaug´s Treasure DLC HOARD Killing Floor Magicka + 2 DLC Mortal Kombat Kollection Natural Selection 2 Knights and Merchants HD Pirates of Black Cove Commander - Conquest Of The Americas Two Worlds - Game of the Year Edition Enclave East India Company Gold Edition Knightshift Knights and Merchants HD Orcs Must Die! 2: Complete Pack Orcs Must Die! GOTY И многие другие игры. НА ЗАМЕТКУ: 1. Возможно повторение игр несколько раз. 2. Если при активации в Steam появилось сообщение "У Вас уже есть этот продукт", значит игра у Вас уже есть, а ключ остается рабочим - его можно активировать на другом аккаунте Steam. 3. Возврата денег за рабочий товар или замены ключей на другие - нет.(Если вам попалась игра которая у вас уже есть!) 4. Это не Steam Gifts, это ключ. 5. Мы не несем ответственность на распродажи и временные скидки в системе Steam, если игра которая вам попалась в данный момент стоит дешевле чем вы ее купили у нас, помните вы купили КЛЮЧ а не ГИФТ. АКТИВАЦИЯ: 1. Необходимо скачать и установить Steam (если еще не установлен). 2. Зарегистрировать новый аккаунт в Steam или зайти в существующий. 3. Перейти в раздел «Мои игры» и выбрать «Активировать через Steam…», ознакомится и согласиться с соглашением подписчика службы Steam и ввести ключ полученный сразу после оплаты. 4. Игра появиться в списке игр и вы сможете скачать её со Steam.', '', 'http://cs627621.vk.me/v627621203/44b3f/B3tf3FHvNzQ.jpg', '30.00', '0', '30.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(28, 7, 0, 'Аккаунт Counter-Strike', '<p>\r\n\r\n</p><p>После оплаты Вы получаете<strong>&nbsp;аккаунт Steam с &nbsp;Counter-Strike: Global Offensive</strong>. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем <strong>купить</strong>&nbsp;не раздумывая! Получите массу удовольствия от <strong>лицензионной игры&nbsp;</strong>купленной в нашем магазине.</p><p>Купить<strong>&nbsp;\r\n\r\n<strong>аккаунт Steam с игрой Counter-Strike: Global Offensive</strong>.\r\n\r\n</strong></p>\r\n\r\n<br>Эта игра является одной из частей наиболее знаменитого командного экшена в мире. А следовательно за её появлением следила наиболее широкая армия пользователей и почитателей со всего мира. И как оказалось на практике, столь пристальное внимание было вполне аргументировано, поскольку седьмая по счету версия игры позволила своим геймерам ощутить настоящий приток позитивных впечатлений. Само собой, как и прежде, пользователям, которые решат купить ключ Counter-Strike: Source , необходимо будет принять на себя управление либо террористом, либо контер террористом, но в этот раз вы можете ожидать от игры более зрелищного развития событий. Примечательно, что в этой части разработчики постарались сохранить все основные особенности, достоинства и характеристики своих предыдущих версий, но при этом умудрились поменять «движок». Именно на нём будет базироваться описание основных особенностей игры.\r\n<br><p></p></div>', '', 'http://cs625118.vk.me/v625118531/34c7d/M_XiAAGnB3E.jpg', '90.00', '0', '90.00', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(29, 7, 0, 'Аккаунт Clash of Clans', '<p>\n\n\n\n</p><p>После оплаты Вы получаете<strong>&nbsp;аккаунт Clash of Clans</strong>. Советуем <strong>купить</strong>&nbsp;не раздумывая! Получите массу удовольствия от <strong>аккаунта&nbsp;Clash of Clans</strong></p><p>Купить<strong>&nbsp;\n\nаккаунт Clash of Clans&nbsp;</strong>можно в нашем магазине, онлайн.</p>\n\nЗдесь вы можете приобрести игровой аккаунт Clash of Clans по довольно привлекательной цене. Найдите подходящий вам уровень ратуши и сделайте свой выбор! Аккаунты находятся на обеих платформах ( iOS и Android ), после покупки вы получите полные данные от &nbsp;них и станете единоличным владельцем. Удачных покупок! <br><br><img width="550" alt="" src="http://cs629216.vk.me/v629216280/2f515/xbD7AU4HFOQ.jpg" height="310">\n\n<br><p></p></div>', '', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', '95.00', '0', '95.00', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(30, 7, 0, 'Аккаунт Clash Royale', '<p>\n\n</p><p>После оплаты Вы получаете<strong>&nbsp;аккаунт Clash Royale</strong>. Советуем <strong>купить&nbsp;Clash Royale&nbsp;</strong>не раздумывая! Получите массу удовольствия от <strong>аккаунта Clash Royale</strong></p><p>Купить<strong>&nbsp;\n\nаккаунт Clash Royale </strong>можно в нашем магазине, онлайн.</p>\n\nЗдесь вы можете приобрести игровой аккаунт Clash of Clans по довольно привлекательной цене. Аккаунты находятся на платформах ( iOS и Android ), после покупки вы получите полные данные от &nbsp;них и станете единоличным владельцем. Удачных покупок! <br><br><img alt="" src="https://cs7054.vk.me/c615716/v615716203/1315/sOJWs1PesbY.jpg"><br><p></p></div>', '', 'https://pp.vk.me/c633122/v633122560/1f7a6/hXBDjgdgKnc.jpg', '90.00', '0', '90.00', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(31, 7, 0, 'Аккаунт Castle Clash Битва Замков', '<p>\n\nЗдесь вы можете приобрести игровой аккаунт Castle Clash Битва Замков по довольно привлекательной цене. Найдите подходящий вам уровень ратуши и сделайте свой выбор! Аккаунты находятся на обеих платформах ( iOS и Android ), после покупки вы получите полные данные от них и станете единоличным владельцем. Удачных покупок! \n\n</p><p>После оплаты Вы получаете<strong>&nbsp;\n\nаккаунт Castle Clash Битва Замков\n\n</strong>. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем <strong>купить</strong>&nbsp;не раздумывая! Получите массу удовольствия от<strong>лицензионной игры </strong>купленной в нашем магазине.</p><p>Купить<strong>&nbsp;\n\nаккаунт Castle Clash Битва Замков\n\n </strong>можно в нашем магазине, онлайн.&nbsp;</p><p></p></div>', '', 'http://cs631530.vk.me/v631530699/130dc/0DRSAG2EhhM.jpg', '90.00', '0', '90.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(32, 7, 0, 'Аккаунт Grand Theft Auto V', '<p>\n\n</p><p>После оплаты Вы получаете<strong>&nbsp;аккаунт Steam с &nbsp;Grand Theft Auto 5</strong>. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем <strong>купить</strong>&nbsp;не раздумывая! Получите массу удовольствия от <strong>лицензионной игры&nbsp;</strong>купленной в нашем магазине.</p><p>Купить<strong>&nbsp;\n\n<strong>аккаунт Steam с игрой Grand Theft Auto 5</strong>.\n\n</strong></p>\n\n<br>Ищешь где купить лицензионный аккаунт steam Grand Theft Auto 5? Ты пришел по адресу! Оплатив данный товар, вы получите лицензионный аккаунт Grand Theft Auto 5 Лос-Сантос – город звёзд, яркого солнца, моды, бандитских разборок и роскоши! И теперь он вновь станет маяком для преступного мира! Манящая Grand Theft Auto 5 направила курс на PC, дабы обратить ваше внимание на троицу совершенно разных, но отчаянных преступников, которые бросают все свои силы, чтобы схватить удачу за хвост, в надежде найти и свое «место под солнцем»! Купить Grand Theft Auto 5 – значит обеспечить себе до безумия огромное количество часов геймплея, открыв себе мир по-настоящему удивительных возможностей и развлечения! Познакомьтесь с троицей главных героев: Бывший член уличной банды Франклин, утонувший в стараниях завязать с криминальным прошлым. Превосходный грабитель банков Майкл, который бросил свое дело, но так же обнаружил, что спокойная и честная жизнь далеко не всегда несёт радости. И просто до ошеломления повернутый на насилии псих – Тревор, с надеждой однажды тоже сорвать большой куш! Судьбы героев переплетутся в новой криминальной авантюре, в надежде на исполнение желаний каждого. Помимо всего прочего, Rockstar Games обещает потрясающий детализированный мир, который когда-либо существовал в виртуальной реальности! И наконец, осуществить различный исход сюжета, дав игрокам осуществить «правильный» выбор. \n<br><p></p></div>', '', 'http://cs627621.vk.me/v627621913/4628a/lnuaCGn41XU.jpg', '90.00', '0', '90.00', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, 7, 0, 'Аккаунт Minecraft', '<p>\n\n\n\n</p><p>После оплаты Вы получаете<strong></strong>&nbsp;<strong>Лицензионный аккаунт Minecraft</strong><strong></strong>. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем <strong>купить лицензионный аккаунт minecraft</strong>&nbsp;не раздумывая! Спешите <strong>купить лицензионный аккаунт minecraft </strong>у нас по дешевой цене.</p><p>(А также в качестве бонуса, на <strong>аккаунте</strong>&nbsp;может присутствовать и много других игр)<br><strong></strong></p><p><strong>Купить лицензионный аккаунт minecraft&nbsp;</strong>можно в нашем магазине, онлайн.</p>\n\n\n<br><p></p></div>', '', 'http://cs631627.vk.me/v631627394/12f0d/k1TqjxWb9Es.jpg', '15.00', '0', '15.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(34, 0, 0, 'Тестовая покупка', 'Это тестовая покупка, если Вы собрались купить товар впервые, то она поможет Вам понять как получить товар после оплаты на нашем сайте.', '', 'http://hyper-store.pro/images/fifa17.png', '5.00', '0', '5.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(35, 6, 0, 'Random Steam аккаунт', 'Steam — сервис цифрового распространения компьютерных игр и программ, принадлежащий компании Valve, известному разработчику компьютерных игр. Steam выполняет функции службы активации, загрузки через интернет, автоматических обновлений и новостей для игр как самой Valve, так и сторонних разработчиков по соглашению с Valve, таких как Epic Games, THQ, 2K Games, Activision, Capcom, Codemasters, Eidos Interactive, 1С, GSC Game World, id Software, SEGA, Atari, Rockstar Games, Telltale Games, Ubisoft, Bethesda Softworks и многих других фирм, оформивших контракт на дистрибьюцию. По состоянию на конец 2013 года, через Steam распространяется более четырёх тысяч товаров, на которые действуют ежедневные, срединедельные и скидки на выходные дни, а количество активных аккаунтов превысило 75 миллионов. Полный список издателей и разработчиков, сотрудничающих с сервисом, расположен в открытом доступе на сайте Steam. Первоначально распространялись только игры, трейлеры и модификации к ним, однако в Valve несколько раз заявляли, что в дальнейшем планируют расширить специализацию сервиса, начав распространение через него музыки и полнометражных фильмов.', '', 'http://cs633527.vk.me/v633527112/b394/AxGpXAM_m18.jpg', '20.00', '0', '20.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(36, 6, 0, 'Random Origin аккаунт', 'Origin — система цифровой дистрибуции компании Electronic Arts, которая даёт возможность пользователям приобретать компьютерные игры через Интернет и загружать их с помощью клиента Origin (ранее EA Download Manager, EA Downloader и EA Link). 3 июня 2011 EA Store был переименован в Origin. В Origin используются социальные функции, такие как управление профилем, общение с друзьями в чате и во время игры с помощью внутриигрового приложения, интеграция с Facebook, Xbox Live и PlayStation Network. Предполагается довести Origin до состояния конкурентоспособности с её основным соперником Steam. На данный момент имеется возможность автообновления игр, синхронизация сохранений игр в облачном хранилище, общение во встроенном чате.', '', 'http://cs630716.vk.me/v630716203/12fa4/pugAxmcYxFo.jpg', '20.00', '0', '20.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(37, 7, 0, 'Аккаунт Garry''s Mod', 'После оплаты Вы получаете Аккаунт Steam с игрой Garry''s Mod. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем купить не раздумывая! Получите массу удовольствия от лицензионной игры купленной в нашем магазине. (А также в качестве бонуса, на аккаунте может присутствовать и много других игр)', '', 'http://cs622531.vk.me/v622531907/4e901/xNDho4In8MI.jpg', '40.00', '0', '40.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(38, 7, 0, 'Аккаунт Rust', '<p>\n\n</p><p>После оплаты Вы получаете<strong>&nbsp;аккаунт Steam с &nbsp;Rust</strong>. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем <strong>купить аккаунт Rust</strong>&nbsp;не раздумывая! Получите массу удовольствия от <strong>лицензионной игры&nbsp;</strong>купленной в нашем магазине.</p><p>Купить<strong>&nbsp;\n\n<strong>аккаунт Steam с игрой Rust</strong>.\n\n</strong></p>\n\n<br>Аккаунт Rust идет в полном доступе, после покупки вы получаете товар в виде: почта:пароль, логин:пароль\n\nТовар идет с большой отлежкой, обычно на аккаунте присутствуют и другие игры которые идут как бонус.\n\nИграйте и радуйтесь с друзьями, именно кооператив не даст вам заскучать.\n\nПосле покупки убедительно рекомендуем вам сменить пароль от аккаунта Rust, установить секретные вопросы или переустановить их и перевязать почту на свою.\n<br><p></p></div>', '', 'http://i.ytimg.com/vi/UBgsEZeTwQE/maxresdefault.jpg', '50.00', '0', '50.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(39, 7, 0, 'Аккаунт Fifa 16', 'Покупая данный товар Вы моментально получаете лицензионный аккаунт Origin с игрой Fifa 16 + ответ на секретный вопрос. Данные учетной записи доставляется моментально в автоматическом режиме. На многих аккаунтах кроме Fifa 16 + секретка присутствуют другие игры, такие игры идут как бонусы. Аккаунт вида - Логин:пароль Могут быть аккаунты с установленным секретным вопросом от Ultimate Team. На все наши товары действует система скидок при оплате Webmoney. Аккаунты гарантировано продаются в одни руки. Внимательно прочитайте описание и рекомендации и следуйте им. Чтобы получить подарок нужно: 1) Нажать на отзыв ``Хорошо`` 2) Оставить свой отзыв и добавить ``Хочу подарок`` 3) Написать любое сообщение в переписку с продавцом. 4) В течении 1-3 суток Вам в переписку пришлют подарок (Подарок - случайный аккаунт Origin) Внимательно прочитайте описание и рекомендации и следуйте им. Уважаемые покупатели мы всегда рады вам помочь. Если у вас возникли проблемы не спешите оставлять отрицательный отзыв, напишите нам в переписку или скайп и мы ОБЯЗАТЕЛЬНО вам поможем. Если вам не отвечают сразу, не беспокойтесь в ближайшее время вам обязательно ответят и помогут. Так же если вам всё понравилось не забывайте после покупки оставить отзыв, он очень важен для нас. Так же при покупке Вы соглашаетесь с правилами: •Гарантия на все аккаунты только на момент продажи.', '', 'http://cs631531.vk.me/v631531581/fe2b/Oo2C6akYp3c.jpg', '60.00', '0', '60.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(40, 7, 0, 'World of Tanks', 'После оплаты Вы получаете Аккаунт с игрой World Of Tanks от 2 тысяч боев с танком 8-10 уровня (без привязки к телефону) Стань профессионалом в WOT, ты можешь купить аккаунт wot дешево лучшие танки только в нашем магазине. Купите онлайн и играйте с удовольствием. Купить Аккаунт с игрой World Of Tanks купить аккаунт wot дешево можно в нашем магазине, онлайн.', '', 'http://steame.ru/themes/default/uploads/1569572/WoT-LOGO-620x330.png', '60.00', '0', '60.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(41, 7, 0, 'Купить Warface (от ежа до птички)', '<p>\n\n</p><p>После оплаты Вы получаете <strong>Аккаунт с игрой Warface от ежа до птички</strong>&nbsp;(с почтой)</p><p>Если вы всегда мечтали стать профессионалом в <strong>Warface</strong>, тогда покупайте <strong>аккаунт онлайн</strong>&nbsp;не раздумывая! В нашем магазине лучшая <strong>экипировка</strong>&nbsp;<strong>для игры</strong>&nbsp;<strong>Warface</strong>.</p><p>Купить<strong>&nbsp;Аккаунт с игрой Warface</strong></p><p></p></div>', '', 'http://steame.ru/themes/default/uploads/1660346/warface.jpg', '80.00', '0', '80.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(42, 7, 0, 'Plants vs Zombies Garden Warfare', 'Вы всё ещё считаете, что растения – это лишь живность, которая даёт нам кислород? Позвольте напрочь развеять ваши убеждения. Вместе с этой игрой вы встретите растительный мир в совершенно новом амплуа. Решив купить ключ Plants vs Zombies Garden Warfare, вы становитесь собственником продолжения именитой серии игр о немыслимом противостоянии чуждых к свету зомби и растений, которые не желают, чтобы по земле бродила всякая нечисть. Посейте семена победы и разработайте собственную тактику в этом невероятном экшене. Отправляйтесь за наградами в умопомрачительный мир, где вам предстоит рыть окопы и готовиться к полномасштабным боевым действиям, дабы отстоять планету у бесшабашных и кровожадных зомби. Получите лицензионный аккаунт Origin, на котором будет игра Plants vs. Zombies: Garden Warfare На многих аккаунтах кроме Plants vs. Zombies: Garden Warfare могут присутствовать другие игры, они идут как бонусы. Аккаунты вида: Логин:Пароль', '', 'http://graph.digiseller.ru/img.ashx?id_d=1943295', '50.00', '0', '50.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(43, 7, 0, 'Аккаунт Fallout 4', 'Мы предлагаем уникальную возможность купить Fallout 4. Наша цена на много меньше, чем в официальном магазине, но наш аккаунт Fallout 4 ни чем не хуже! После покупки Вы на почту получите данные от лицензионного аккаунта Fallout 4. Так же мы можем предложить Вам приобрести лицензионный ключ Fallout 4, но более дороже. На наши аккаунты Fallout 4 мы распространяем 7 дневную гарантию, поэтому Вы можете быть уверенными что Вас не кинут! Мы отвечаем за наши игры! Многие люди задают вопрос, где купить Fallout 4, ответ прост, конечно же у нас!', '', 'http://cs622531.vk.me/v622531118/4abba/COGdNyLMKdU.jpg', '90.00', '0', '90.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(44, 5, 0, 'Ключ Terraria', 'После оплаты вы получаете ссылку для активации подарка Terraria на платформе Steam. Копайте, сражайтесь, исследуйте, стройте! Нет ничего невозможного в этой насыщенной событиями приключенческой игре. Весь мир — ваше полотно, а вся земля — ваши краски! Хватайте инструменты и вперед! Создавайте оружие, чтобы сражаться с различными врагами ... Внимание! Этот подарок может быть активирован только в странах: Армения, Азербайджан, Республика Беларусь, Грузия, Киргизстан, Казахстан, Республика Молдова, Таджикистан, Туркменистан, Узбекистан, Украина, Россия', '', 'https://pp.vk.me/c627117/v627117192/58be9/q0Br-dPQbYU.jpg', '80.00', '0', '80.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(45, 7, 0, 'Аккаунт PayDay 2', 'Игра включает в себя 30 локаций, все ограбления отличаются по времени прохождения и по их сложности. Система прокачки идентична системе в первой части, но была усовершенствована новыми классами: Enforcer — специалист по тяжёлому вооружению и броне. Mastermind — лидер-манипулятор, специализирующийся на контроле заложников и поддержании здоровья союзников. Ghost — мастер бесшумного прохождения. Technician — демонстрирует мастер-класс в обращении со спецсредствами, помогающими производить грабежи. Каждый класс имеет обширный набор умений, они открываются и прокачиваются с помощью очков опыта[4]. Игроки могут использовать краденные игровые деньги в целях усовершенствования своего инвентаря, а также полученные очки для улучшения своих навыков. Выполнение миссий позволит получить в награду уникальные предметы. Игра не кажется постоянно одинаковой: враги появляются из разных мест, в заданиях случайным образом генерируется геометрия (расположение дверей, комнат, камер, охранников, людей и т. д.) и некоторые события.', '', 'http://steame.ru/themes/default/uploads/1673549/payday-2-featured-1.jpg', '50.00', '0', '50.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(46, 7, 0, 'Battlefield Hardline', 'Действие происходит через 6 лет после событий Battlefield 3 в 2020 году. Нам предстоит играть роль сержанта Дэниела Рекера, бойца элитного подразделения, известного как группа Tombstone. Отряд получил задание отправиться в Баку и получить важную информацию от беглого российского генерала. Группу обнаруживают, и приходится с боем прорываться назад, сражаясь с превосходящими силами российской армии. Возвращаясь на «Валькирию» — авианосец класса «Оса», — где выясняется, что добытые сведения подтверждают самые худшие подозрения: китайский адмирал Чанг (Chang) планирует устроить военный переворот в Китае, и Россия готова его поддержать. После анализа ситуации «Валькирия» взяла курс на Шанхай. Группе «Могильщик» поручено войти в город и эвакуировать группу ВИП-персон. Весь Китай охвачен волнениями после того, как США были обвинены в убийстве Цзинь Цзе, возможного лидера страны и активного борца за мир. Адмирал Чанг отменил выборы и ввел режим военного времени.', '', 'http://cs625728.vk.me/v625728747/3d025/a9resmkBY24.jpg', '60.00', '0', '60.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(47, 7, 0, 'Аккаунт Battlefield 4', 'Действие происходит через 6 лет после событий Battlefield 3 в 2020 году. Нам предстоит играть роль сержанта Дэниела Рекера, бойца элитного подразделения, известного как группа Tombstone. Отряд получил задание отправиться в Баку и получить важную информацию от беглого российского генерала. Группу обнаруживают, и приходится с боем прорываться назад, сражаясь с превосходящими силами российской армии. Возвращаясь на «Валькирию» — авианосец класса «Оса», — где выясняется, что добытые сведения подтверждают самые худшие подозрения: китайский адмирал Чанг (Chang) планирует устроить военный переворот в Китае, и Россия готова его поддержать. После анализа ситуации «Валькирия» взяла курс на Шанхай. Группе «Могильщик» поручено войти в город и эвакуировать группу ВИП-персон. Весь Китай охвачен волнениями после того, как США были обвинены в убийстве Цзинь Цзе, возможного лидера страны и активного борца за мир. Адмирал Чанг отменил выборы и ввел режим военного времени. США и Россия сосредоточили крупные силы у китайского побережья. Напряжение нарастает.', '', 'http://steame.ru/themes/default/uploads/1820890/battlefield-3-logo-540x303.jpg', '50.00', '0', '50.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(48, 7, 0, 'Аккаунт Battlefield 3', 'Что может быть интереснее, чем в свое свободное время погрузиться в настоящее приключение, где в вашем расположении может оказаться одно из самых известных военных подразделений во всем мире. Задумавшись над тем, чтобы купить Battlefield 3 , вы откроете перед собой замечательную возможность увидеть многогранный мир войны с другой стороны, где от каждого неправильного действия одного бойца может зависеть жизнь всех членов отряда и соответственно исход миссии. Согласно сюжету, в третей части известного и пользующегося популярностью шутера Battlefield вам предстоит одеть на себя мундир элитной морской пехоты и погрузиться в серьёзнейшее приключение. В тот же момент это приключение не только позволит вам испытать особенности ведения полномасштабного боя на различных местностях и локациях, но и ощутить в полной мере ту массовость и яркость впечатлений, что могут демонстрировать настоящие боевые действия.', '', 'http://cs630823.vk.me/v630823721/1393f/iUybls0Vkjs.jpg', '40.00', '0', '40.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(49, 7, 0, 'CS:GO + GTA V + 100 ИГР', '<p>\n\nПосле оплаты Вы получаете данные от аккаунта в формате Логин:Пароль для входа в клиент Steam.<br><br>Игры на аккаунте:<br>CS:G0 + GTA5 + 100 игр<br><br>После входа на аккаунт не забудьте проделать следующие действия по порядку:<br>• Изменить контактный адрес электронной почты;<br>• Изменить пароль на аккаунте;<br>• Изменить секретный вопрос;<br>• Включить Steam Guard.<br><br>Гарантии:<br><br>Гарантия на все аккаунты только на момент продажи<br>Претензии принимаются продавцом в течении 10 минут после оплаты товара и только через форму &amp;quot;Переписка с продавцом:&amp;quot;<br><br>Замена производиться в случиях:<br>1. Если данные от аккаунты были не верны.<br>2. Товар не соответствует описанию. <br>2. На аккаунте присутствует бан на данную игру. (только на момент продажи) <br>3. Если Вы забыли пароль от аккаунта или аккаунт был заблокирован, либо забанен, либо возвращен уже ПОСЛЕ покупки, такие аккаунты не подлежат замене.\n\n<br></p></div>', '', 'http://graph.digiseller.ru/img.ashx?idp=1099416&maxlength=0&crop=1', '290.00', '0', '290.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(50, 7, 0, 'CS:GO + 300 ИГР', '<p>\n\nПосле оплаты Вы получаете данные от аккаунта в формате Логин:Пароль для входа в клиент Steam.<br><br>Игры на аккаунте:<br>300+ игр<br><br>На аккаунте возможны другие игры - это дополнительный бонус от нас.<br><br>После входа на аккаунт не забудьте проделать следующие действия по порядку:<br>• Изменить контактный адрес электронной почты;<br>• Изменить пароль на аккаунте;<br>• Изменить секретный вопрос;<br>• Включить Steam Guard.<br><br>Гарантии:<br><br>Гарантия на все аккаунты только на момент продажи<br>Претензии принимаются продавцом в течении 10 минут после оплаты товара и только через форму &amp;quot;Переписка с продавцом:&amp;quot;<br><br>Замена производиться в случиях:<br>1. Если данные от аккаунты были не верны.<br>2. Товар не соответствует описанию. <br>2. На аккаунте присутствует бан на данную игру. (только на момент продажи) <br>3. Если Вы забыли пароль от аккаунта или аккаунт был заблокирован, либо забанен, либо возвращен уже ПОСЛЕ покупки, такие аккаунты не подлежат замене.\n\n<br></p></div>', '', 'http://graph.digiseller.ru/img.ashx?idp=1099195&maxlength=0&crop=1', '390.00', '0', '390.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(51, 6, 0, 'СЛУЧАЙНЫЙ ORIGIN АККАУНТ', '<p>\n\nПосле оплаты Вы получаете данные от аккаунта в формате Логин:Пароль для входа в клиент Origin.<br><br>Игры на аккаунте:<br>Случайная игр(а/ы)<br><br>На аккаунте возможны другие игры - это дополнительный бонус от нас.<br><br>После входа на аккаунт не забудьте проделать следующие действия по порядку:<br>• Изменить контактный адрес электронной почты;<br>• Изменить пароль на аккаунте;<br>• Изменить секретный вопрос;<br><br>Гарантии:<br><br>Гарантия на все аккаунты только на момент продажи<br>Претензии принимаются продавцом в течении 10 минут после оплаты товара и только через форму Переписка с продавцом:<br><br>Замена производиться в случиях:<br>1. Если данные от аккаунты были не верны.<br>2. Товар не соответствует описанию. <br>2. На аккаунте присутствует бан на данную игру. (только на момент продажи) <br>3. Если Вы забыли пароль от аккаунта или аккаунт был заблокирован, либо забанен, либо возвращен уже ПОСЛЕ покупки, такие аккаунты не подлежат замене.\n\n<br></p></div>', '', 'http://graph.digiseller.ru/img.ashx?idp=1099589&maxlength=0&crop=1', '30.00', '0', '30.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(52, 7, 0, 'ORIGIN CБОРНИК 25 ИГР', '<p>\n\nПосле оплаты Вы получаете данные от аккаунта в формате Логин:Пароль для входа в клиент Origin.<br><br>Игры на аккаунте:<br>25+ штук<br><br>После входа на аккаунт не забудьте проделать следующие действия по порядку:<br>• Изменить контактный адрес электронной почты;<br>• Изменить пароль на аккаунте;<br>• Изменить секретный вопрос;<br><br>Гарантии:<br><br>Гарантия на все аккаунты только на момент продажи<br>Претензии принимаются продавцом в течении 10 минут после оплаты товара и только через форму &amp;quot;Переписка с продавцом:&amp;quot;<br><br>Замена производиться в случиях:<br>1. Если данные от аккаунты были не верны.<br>2. Товар не соответствует описанию. <br>2. На аккаунте присутствует бан на данную игру. (только на момент продажи) <br>3. Если Вы забыли пароль от аккаунта или аккаунт был заблокирован, либо забанен, либо возвращен уже ПОСЛЕ покупки, такие аккаунты не подлежат замене.\n\n<br></p></div>', '', 'http://graph.digiseller.ru/img.ashx?idp=1099428&maxlength=0&crop=1', '90.00', '0', '90.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(53, 7, 0, 'Аккаунт Watch Dogs', 'Купить Watch Dogs и погрузитесь в Чикаго, в те времена, когда в повседневную жизнь людей стали активно внедряться технологии, когда мир стал заложником огромной единой компьютерной сети. Имя ей – Центральная Операционная Система, или ctOS. Именно ей принадлежала власть над большей частью базы технологических данных. Ей были доступны все сведения о городе, а также обо всех его жителях. Наш герой – талантливый хакер и мастер в своем деле Эйден Пирс. Его опасные увлечения привели к трагедии, связанной с его семьей. И теперь Эйден считается одним из главных преступников. В поисках правды и справедливости, вы должны помочь нашему герою, преодолевая гигантские пространства цифровой реальности. В ваших руках – умения героя взламывать системы. Город будет являться вашим грозным оружием мести. А наблюдать за обстановкой вам помогут камеры наблюдения, которые вы сможете с легкостью взломать и настроить под себя. Дороги, транспорт, все это тоже окажется в ваших руках. Возможностей – тысячи, и только от вас зависит дальнейшая судьба героя.', '', 'https://pp.vk.me/c628818/v628818264/23ed5/T91_x73DLaw.jpg', '50.00', '0', '50.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(54, 7, 0, 'Just Cause 3', '<div><b><u>Аккаунт вида Логин:Пароль + Почта:Пароль<br>Входить через Steam!</u></b><br><br><b>Just Cause 3</b>&nbsp;– это все тот же бодренький боевик, разработанный компанией Avalanche Studios.<br><br>Главный герой – Рико Родригес, эдакий Сильвестр Сталлоне и Жан-Клод Ванн Дам в одном флаконе. Рико, попав на средиземноморский остров, вынужден противостоять жестокому диктатору – генералу ди Равельо. У ди Равельо есть армия из профессиональных наемников, однако и Рико не пальцем делан. Чтобы посмотреть на это эпичное противостояние необходимо <b>купить аккаунт Just Cause 3</b>.<br><br>В новой части, как и в предыдущих играх серии, будет легендарный чудо-крюк. С его помощью Рико без проблем может перемещаться по локациям а-ля Человек-Паук. Но на этом веселье не заканчивается. Но это далеко не все возможности крюка. С его помощью Рико может привязывать людей к различным предметам. Благодаря этой возможности можно эффективно и зрелищно обезвредить врага.<br><br>Только у нас вы можете <b>купить аккаунт Just Case 3 STEAM</b>&nbsp;на русском языке, по низкой цене!</div>', '', 'http://steame.ru/themes/default/uploads/2030575/Just-Cause-3-640x330.jpg', '70.00', '0', '70.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(55, 7, 0, 'Аккаунт Far Cry 4', 'После покупки, Вы получаете лицензионный аккаунт Uplay с игрой FARCRY 4.\n\nНа многих аккаунтах кроме FARCRY 4 присутствуют другие игры, такие игры идут как бонусы.   \n\nАккаунты вида: логин:пароль (от клиента Uplay)\n\nОб игре:\nКират – крошечная страна, затерянная в Гималаях. В роли Анджая Гейла вам предстоит отправиться туда, чтобы выполнить последнюю волю матери. Но это путешествие не из простых – ведь в Кирате пылает гражданская война. Здесь вам предстоит изучать обширный открытый мир, где опасности поджидают на каждом шагу. Здесь каждое ваше решение будет иметь последствия, а каждое действие создает историю.\nСозданный по образу и подобию своего знаменитого предшественника, Far Cry 4 предлагает фирменный геймплей, ставший еще совершеннее, в открытом мире, который в несколько раз больше, а также обновленную систему совместного прохождения, позволяющую присоединиться к игре или покинуть ее в любой момент.', '', 'http://cs630716.vk.me/v630716671/1236a/GRt0eB2xSY8.jpg', '50.00', '0', '50.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(56, 5, 0, 'Ключ Counter-Strike: Global Offensive', '<p>\n\n\n\n</p><p>После оплаты Вы получаете<strong>&nbsp;Ключ Steam для активации игры Counter-Strike: Global Offensive</strong>. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем <strong>купить</strong>&nbsp;не раздумывая! Получите массу удовольствия от <strong>лицензионной игры </strong>купленной в нашем магазине.</p><p>Купить<strong>&nbsp;Ключ Steam для активации игры Counter-Strike: Global Offensive&nbsp;</strong>можно в нашем магазине, онлайн.</p>\n\n\n<br><p></p></div>', '', 'http://cs630716.vk.me/v630716171/215ca/nFrYh6ZeiTg.jpg', '190.00', '0', '190.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(57, 5, 0, 'Ключ Grand Theft Auto V', '<p>\n\n</p><p>После оплаты Вы получаете<strong>&nbsp;GTA 5 на PC Ключ Steam</strong>. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем <strong>купить gta 5 на pc</strong>&nbsp;не раздумывая! Получите массу удовольствия от <strong>лицензионной игры</strong>&nbsp;купленной в нашем магазине. Спешите <strong>купить gta 5 на pc </strong>и получите дополнительно подарок! У нас можно <strong>купить gta 5 ключ </strong>в режиме онлайн.</p><p><strong>купить gta 5 на pc</strong></p><p><strong>купить gta 5 ключ</strong></p>\n\nGrand Theft Auto V -&nbsp;Мультиплатформенная видеоигра в жанре Action и открытый мир, разработанная компанией Rockstar North и изданная компанией Rockstar Games. Является пятнадцатой по счёту игрой серии Grand Theft Auto. Дебютный трейлер был выпущен 2 ноября 2011 года, а анонс самой игры состоялся на следующий день, 3 ноября. Выход игры изначально планировался на весну 2013 года, но был отложен на 17 сентября 2013 года для Xbox 360 и PlayStation 3. На выставке E3 2014 игра была анонсирована для консолей восьмого поколения и персональных компьютеров, на которых выход игры состоялся 18 ноября 2014 и 14 апреля 2015 года соответственно. В России и СНГ Grand Theft Auto V издаётся компанией 1С-СофтКлаб. После оплаты Вы получаете GTA 5 на PC Ключ Steam или рандом. Если Вам нравится эта игра и Вы всегда хотели в неё поиграть? Советуем купить gta 5 на pc не раздумывая! Получите массу удовольствия от лицензионной игры купленной в нашем магазине. Спешите купить gta 5 на pc и получите дополнительно подарок! У нас можно купить gta 5 ключ в режиме онлайн.\n\n<br><p></p></div>', '', 'http://steame.ru/themes/default/uploads/1631526/gta_v_main.jpg', '600.00', '0', '600.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(58, 7, 0, 'Аккаунт The Crew', '<p>\n\nИзвестная игра Driver стала безумно популярной, что подтолкнуло её производителей к идее создания очередной захватывающей игровой истории. Компанией Ubisoft был создан новейший гоночный автосимулятор The Crew. Играть его можно совместно с другими пользователями. Именно это является основным преимуществом данной игры. Представить только, геймеры всего мира могут собраться воедино для противостояния друг другу, объединения нескольких команд. Это совершенно другие ощущения нежели играть в одиночку. Вы сможете достигать поставленных целей и один, а можете создать собственную гоночную команду, которая будет иметь противника из другой страны, например. Для этого необходимо <b>купить ключ The Crew </b>в интернет-магазине steampay.com<br><br>Есть много любителей подобных онлайн игр, которые уже прошли все уровни наиболее сложных и увлекательных гонок. Таким образом благодаря The Crew опытные геймеры вновь обретут любимое занятие погоняться по виртуальным улицам Соединённых Штатов Америки, посетить пляжи и парки США, полностью погружаясь в виртуальную реальность. В игре представлены самые разнообразные дороги, на которых вас ждёт множество препятствий и приключений.\n\n<br></p>', '', 'http://steambuy.com/goods_image/1744333-397x185.png', '60.00', '0', '60.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(59, 7, 0, 'Аккаунт Clash of Clans Ратуша 10 lvl', '<p>\n\nЗдесь вы можете приобрести игровой аккаунт по довольно привлекательной цене. Найдите подходящий вам уровень ратуши и сделайте свой выбор! Аккаунты находятся на обеих платформах ( iOS и Android ), после покупки вы получите полные данные от них и станете единоличным владельцем. Удачных покупок! <br><br><img width="550" alt="" src="http://cs629417.vk.me/v629417203/3e92c/kazaGrY-qYI.jpg" height="310">\n\n<br></p>', '', 'http://cs628126.vk.me/v628126203/3ecf7/PSzHotPXuQg.jpg', '190.00', '0', '190.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(60, 7, 0, 'The Sims 4', 'Долгожданное продолжение одного из самых известных симуляторов жизни готово появиться на ваших экранах! Приготовьтесь встречать обновлённых Sims, которые подарят вам массу впечатлений от игрового процесса. Решив купить ключ The Sims 4, вы получаете возможность создать совершенно новых более реалистичных и покладистых персонажей, чей жизнью и всеми её аспектами вы без труда сможете управлять. На этот раз вам станут доступны не только поступки и чувства, но и сами мысли персонажей. Вы в буквальном смысле сможете почувствовать себя Богом в игре, занимаясь общими вопросами благоустройствам и организации жизненного пространства для ранее созданных персонажей. Позвольте себе стать частью невероятного игрового процесса, с которым ранее вы ещё не сталкивались ни в одном проекте одноименной серии!', '', 'http://011.bxpay.ru/img/sims4.png', '40.00', '0', '40.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(61, 7, 0, 'Аккаунт Crysis 3', 'Третья честь баснословно известного шутера Crysis заставит вас перевернуть свои представления об этой игре с ног на голову. Причина в том, что те пользователи, которые решат стать частью детализированного игрового мира, в этой части игры станут не жертвами, а охотниками. Все действия игрового процесса разворачиваются в 2047 году, когда главный персонаж узнаёт, что корпорация C.E.L.L. конструируя запретные зоны, желает отомстить. При этом жителям города говорят, что все возведённые конструкции являются частью очистительного комплекса мегаполиса, который необходим для отсеивания оставшихся инопланетян Ceph. Но это всего лишь слова, ведь на самом деле возведение конструкций – это начало расчётливой операции по захвату мирового господства!', '', 'http://cs629229.vk.me/v629229203/1c2d5/IyAWQ3ZrHeo.jpg', '40.00', '0', '40.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(62, 7, 0, 'Аккаунт Mad Max', 'Погружаясь в постапокалиптический невероятно насыщенный и сложный мир этой игры, вы должны быть готовы встретиться со своими худшими страхами. На этой сложной земле будущего вас ждут динамичные схватки с врагом, который может появиться в любой момент из-за каждого угла. Решив купить ключ Mad Max, вы знакомитесь с Безумным Максом, опытным воином одиночкой, которому никто «не переходит дорогу». Именно он и будет вашим главным героем. Сюжет же игры столкнёт вас с ситуацией, когда у Макса неизвестная банда мародёров украла его любимый автомобиль «Перехватчик» - уникальная боевая машина доверху набитая арсеналом. Вы должны наказать воров смертью, а для этого вам предстоит отправиться в самое жуткое место на планете. Хватит ли вам смелости столкнуться с укомплектованными отрядами боевиков и достаточно ли в вас умения, чтобы противостоять тактическим нападкам врага? Всё это и многое другое вам предстоит узнать из прохождения данного экшена!', '', 'http://game2day.org/uploads/Images/mad-max-promo-art.jpg', '80.00', '0', '80.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 0, '', 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Структура таблицы `ip`
--

CREATE TABLE IF NOT EXISTS `ip` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ip`
--

INSERT INTO `ip` (`id`, `ip`) VALUES
(1, '255.255.255.255');

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `domen` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kupons`
--

CREATE TABLE IF NOT EXISTS `kupons` (
  `id` int(255) NOT NULL,
  `order` int(11) NOT NULL,
  `pago` int(255) NOT NULL,
  `kupon_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `percentage` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `goods` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `ip_address` varchar(255) NOT NULL,
  `attempts` int(1) NOT NULL,
  `lastLogin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `login_attempts`
--

INSERT INTO `login_attempts` (`ip_address`, `attempts`, `lastLogin`) VALUES
('176.59.104.204', 0, '1462032917'),
('176.59.106.185', 0, '1462263476'),
('127.0.0.1', 0, '1479662664');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `bill` varchar(255) NOT NULL,
  `rand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `session_key` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `fund` varchar(255) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `redeemed` int(12) NOT NULL,
  `rk` int(12) NOT NULL,
  `goods` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=426 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `bill`, `rand`, `name`, `email`, `date`, `item_id`, `count`, `price`, `photo`, `session_key`, `ip_address`, `fund`, `paid`, `redeemed`, `rk`, `goods`) VALUES
(373, 'bill[47714857]', '47714857', 'Test', 'mrgreezly@bk.ru', '1461956442.52', 24, 1, '10.89', 'http://www.rulit.me/data/programs/images/doroga-do-hrista_422845.jpg', '6113f3e444f5d89fc383c64818145c0c', '176.59.104.204', 'QIWI', 0, 0, 0, ''),
(374, 'bill[28470375]', '28470375', 'Test', 'alexx87690@gmail.com', '1461956500.31', 24, 1, '10.89', 'http://www.rulit.me/data/programs/images/doroga-do-hrista_422845.jpg', 'd46ec642fb3709781670bb42adb1b953', '37.212.132.230', 'QIWI', 0, 0, 0, ''),
(375, 'bill[24512564]', '24512564', 'Рандом аккаунт Clash of Clans', 'mrgreezly@bk.ru', '1461956650.47', 25, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', '15a02bb35ddcb8a6916a31d233db0670', '176.59.104.204', 'QIWI', 0, 0, 0, ''),
(376, 'bill[26264575]', '26264575', 'Рандом аккаунт Clash of Clans', 'alexx87690@gmail.com', '1461957179.41', 25, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', '8ab4c207d588f5275111f8139459cba8', '37.212.132.230', 'QIWI', 0, 0, 0, ''),
(377, 'bill[81976867]', '81976867', 'Рандом аккаунт Clash of Clans', 'mrgreezly@bk.ru', '1461957586.63', 25, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', 'aa6b880e8b49e4a10ea243bd1f5fca70', '176.59.104.204', 'QIWI', 0, 0, 0, ''),
(378, 'bill[28042386]', '28042386', 'Рандом аккаунт Clash of Clans', 'alexx87690@gmail.com', '1462014961.09', 25, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', '7ab97706748c48a70c42048181cf4032', '37.212.132.230', 'QIWI', 0, 0, 0, ''),
(379, 'bill[13731930]', '13731930', 'Рандом аккаунт Clash of Clans', 'mrgreezly@bk.ru', '1462033013.77', 25, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', 'c0365c4730a7c0ff24eb51f7815f2f5e', '176.59.104.204', 'QIWI', 0, 0, 0, ''),
(380, 'bill[72621754]', '72621754', 'Рандом аккаунт Clash of Clans', 'mrgreezly@bk.ru', '1462037239.64', 25, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', 'c2263e92fb8b951c6cef0211d5ca2453', '176.59.104.204', 'QIWI', 0, 0, 0, ''),
(381, 'bill[49372556]', '49372556', 'Рандом аккаунт Clash of Clans', 'mrgreezly@bk.ru', '1462037240.57', 25, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', 'c2263e92fb8b951c6cef0211d5ca2453', '176.59.104.204', 'QIWI', 0, 0, 0, ''),
(382, 'bill[32932662]', '32932662', 'Рандом аккаунт Clash of Clans', 'alexx87690@gmail.com', '1462131935.92', 25, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', '65c68dd4fc08c080f61e8bd19a5e1d35', '37.212.187.125', 'QIWI', 0, 0, 0, ''),
(383, 'bill[79870888]', '79870888', 'Аккаунт Clash of Clans', 'nick.shegai@mail.ru', '1462646527.13', 29, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', '6f79bbdbb11a491d6605acc6bf966702', '95.213.218.69', 'QIWI', 0, 0, 0, ''),
(384, 'bill[68297857]', '68297857', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463139443.06', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '9293059a73b8b0ee0b0b4aae5f0522ac', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(385, 'bill[72505503]', '72505503', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463139569.41', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '9293059a73b8b0ee0b0b4aae5f0522ac', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(386, 'bill[11924893]', '11924893', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463139853.85', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '8799edada1c05e5a8670b610c2a347d3', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(387, 'bill[79270566]', '79270566', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463140034.57', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '8799edada1c05e5a8670b610c2a347d3', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(388, 'bill[75876952]', '75876952', 'Тестовая покупка', 'rhjjf@bn.ru', '1463140046.28', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '597dffe7662b8baf9cbd13a369126506', '176.60.177.24', 'Robokassa', 0, 0, 0, ''),
(389, 'bill[53787291]', '53787291', 'Тестовая покупка', 'alexx87690@gmail.com', '1463143109.7', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '168021f3e7f5cbe0792de921b953a401', '37.212.186.116', 'Robokassa', 0, 0, 0, ''),
(390, 'bill[37518849]', '37518849', 'Тестовая покупка', 'alexx87690@gmail.com', '1463143393.4', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'daed4525e906d89c406a378bffb18d23', '37.212.186.116', 'Robokassa', 1, 0, 1, '1144c00098839df7b1c9155926094ced.txt'),
(391, 'bill[27681644]', '27681644', 'Тестовая покупка', 'alexx87690@gmail.com', '1463144143.01', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'b1b07e2e65dee44d73d58624ee837863', '37.212.186.116', 'Robokassa', 1, 0, 1, 'a42dc75ace0b5d424815b2481e0102e6.txt'),
(392, 'bill[29774389]', '29774389', 'Тестовая покупка', 'mddhdjjd@gmail.com', '1463144159.04', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '5275b96ca632bcf90b5bb51078f8264d', '176.59.105.246', 'Robokassa', 0, 0, 0, ''),
(393, 'bill[16006872]', '16006872', 'Тестовая покупка', 'mddhdjjd@gmail.com', '1463144201.47', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '5275b96ca632bcf90b5bb51078f8264d', '176.59.105.246', 'Robokassa', 0, 0, 0, ''),
(394, 'bill[91610650]', '91610650', 'GOLD RANDOM STEAM KEY', 'mrgreezly@bk.ru', '1463146193.17', 25, 1, '40', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', '588e5f497b60cdcf3c5bd1d4a50629ab', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(395, 'bill[40039594]', '40039594', 'Тестовая покупка', 'alexx87690@gmail.com', '1463146447.88', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '8e18c3084974e109966bc71fe5eca7a4', '37.212.186.116', 'Robokassa', 1, 0, 1, '62957d49aea2ef07258a9ad37adc81b2.txt'),
(396, 'bill[94386758]', '94386758', 'GOLD RANDOM STEAM KEY', 'mrgreezly@bk.ru', '1463146486.34', 25, 1, '40', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', 'f4043b4f4afaa3ebf4131011ef732cef', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(397, 'bill[17255834]', '17255834', 'Аккаунт Counter-Strike: Global Offensive', 'mrgreezly@bk.ru', '1463146588.87', 28, 1, '90', 'http://cs625118.vk.me/v625118531/34c7d/M_XiAAGnB3E.jpg', 'f4043b4f4afaa3ebf4131011ef732cef', '176.59.107.128', 'Robokassa', 1, 0, 1, '168151d314e3fb65abd3a455cb821626.txt'),
(398, 'bill[35297926]', '35297926', 'GOLD RANDOM STEAM KEY', 'mrgreezly@bk.ru', '1463146787.05', 25, 1, '40', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', '03be4660ed3eb6c7cd46df040248334f', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(399, 'bill[66642579]', '66642579', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463146829.68', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '03be4660ed3eb6c7cd46df040248334f', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(400, 'bill[87700713]', '87700713', 'SILVER RANDOM STEAM KEY', 'alexx87690@gmail.com', '1463146855.4', 26, 1, '30', 'http://cs627621.vk.me/v627621203/44b36/2gsRIuxdZ1k.jpg', '2f71b91908ee6e6bcce6ddb649443ac2', '37.212.186.116', 'Robokassa', 0, 0, 0, ''),
(401, 'bill[68444919]', '68444919', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463146915.22', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', '03be4660ed3eb6c7cd46df040248334f', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(402, 'bill[47708396]', '47708396', 'SILVER RANDOM STEAM KEY', 'alexx87690@gmail.com', '1463147096.34', 26, 1, '30', 'http://cs627621.vk.me/v627621203/44b36/2gsRIuxdZ1k.jpg', '2cb37e651cce9210cedc31161df3e931', '37.212.186.116', 'Robokassa', 0, 0, 0, ''),
(403, 'bill[55608977]', '55608977', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463147164.76', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'eb5b3cc26823563454e3033979ca4682', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(404, 'bill[26811411]', '26811411', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463147185.53', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'eb5b3cc26823563454e3033979ca4682', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(405, 'bill[59574382]', '59574382', 'SILVER RANDOM STEAM KEY', 'alexx87690@gmail.com', '1463147198.66', 26, 1, '30', 'http://cs627621.vk.me/v627621203/44b36/2gsRIuxdZ1k.jpg', '2cb37e651cce9210cedc31161df3e931', '37.212.186.116', 'Robokassa', 0, 0, 0, ''),
(406, 'bill[15479514]', '15479514', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463147244.71', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'eb5b3cc26823563454e3033979ca4682', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(407, 'bill[69266447]', '69266447', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463147260.92', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'eb5b3cc26823563454e3033979ca4682', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(408, 'bill[98639669]', '98639669', 'Тестовая покупка', 'mrgreezly@bk.ru', '1463147308.87', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'eb5b3cc26823563454e3033979ca4682', '176.59.107.128', 'Robokassa', 0, 0, 0, ''),
(409, 'bill[21264957]', '21264957', 'Тестовая покупка', 'dhshdjjd@gmail.com', '1463147364.52', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'd30e285b899f6cea2761ba4c72e06f6c', '176.59.106.87', 'Robokassa', 0, 0, 0, ''),
(410, 'bill[19644831]', '19644831', 'Тестовая покупка', 'dhshdjjd@gmail.com', '1463147370.82', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'd30e285b899f6cea2761ba4c72e06f6c', '176.59.106.87', 'Robokassa', 0, 0, 0, ''),
(411, 'bill[80457971]', '80457971', 'Тестовая покупка', 'frefer@gmail.com', '1463147805.33', 34, 1, '5', 'http://i11.pixs.ru/storage/6/0/8/LRfnWLsjpg_3255884_18784608.jpg', 'afb60e2a41a188fb4739f1d8083520fb', '95.108.133.223', 'Robokassa', 0, 0, 0, ''),
(412, 'bill[73164781]', '73164781', 'Аккаунт Clash of Clans Ратуша 10 lvl', 'denmart93@gmail.com', '1463224200.89', 59, 1, '190', 'http://cs628126.vk.me/v628126203/3ecf7/PSzHotPXuQg.jpg', '072efeb385ce3ba7a2631bacf05c7f2a', '31.173.87.55', 'Robokassa', 1, 0, 1, '666ed834d46c337dc9ccb0d6dd89f7bc.txt'),
(413, 'bill[79581144]', '79581144', 'Аккаунт Clash of Clans', 'denmart93@gmail.com', '1463231815.9', 29, 1, '95', 'http://cs630823.vk.me/v630823203/d4c8/RBlVzNi8_-c.jpg', '46f5e0dfff52e077414bc95b0c27c6b7', '31.173.86.159', 'Robokassa', 1, 0, 1, 'c80d7ef838ca93d52787dd494b6cf295.txt'),
(414, 'bill[42618352]', '42618352', 'Аккаунт Counter-Strike: Global Offensive', 'artur.malyukov.1977@mail.ru', '1463290250.05', 28, 1, '90', 'http://cs625118.vk.me/v625118531/34c7d/M_XiAAGnB3E.jpg', '53e3f933c28499bf2601e271d27bc7f6', '178.207.39.190', 'Robokassa', 0, 0, 0, ''),
(415, 'bill[34358723]', '34358723', 'GOLD RANDOM STEAM KEY', 'svr24host@mail.ru', '28-10-2016', 25, 1, '40', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', '07eced9a3405319d7d8ca882a52b6181', '127.0.0.1', 'Robokassa', 0, 0, 0, ''),
(416, 'bill[72390407]', '72390407', 'GOLD RANDOM STEAM KEY', 'svr24host@mail.ru', '28-10-2016', 25, 1, '40', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', '07eced9a3405319d7d8ca882a52b6181', '127.0.0.1', 'QIWI', 0, 0, 0, ''),
(417, 'bill[59624565]', '59624565', 'BRONZE RANDOM STEAM KEY', 'svr24host@mail.ru', '20-11-2016', 27, 1, '30', 'http://cs627621.vk.me/v627621203/44b3f/B3tf3FHvNzQ.jpg', 'f08f59edf80816bc8cfb28a6b8eb16e9', '127.0.0.1', 'QIWI', 0, 0, 0, ''),
(418, 'bill[35742187]', '35742187', 'Аккаунт Counter-Strike', 'destock@mails.ru', '20-11-2016', 28, 1, '90', 'http://cs625118.vk.me/v625118531/34c7d/M_XiAAGnB3E.jpg', 'da1af7a1e4ee5d9bc74caedf5b39aa2a', '127.0.0.1', 'QIWI', 0, 0, 0, ''),
(419, 'bill[35742187]', '35742187', 'Аккаунт Counter-Strike', 'destock@mails.ru', '20-11-2016', 28, 1, '90', 'http://cs625118.vk.me/v625118531/34c7d/M_XiAAGnB3E.jpg', 'da1af7a1e4ee5d9bc74caedf5b39aa2a', '127.0.0.1', 'QIWI', 0, 0, 0, ''),
(420, 'bill[18641492]', '18641492', 'BRONZE RANDOM STEAM KEY', 'admin@admin.com', '20-11-2016', 27, 1, '30', 'http://cs627621.vk.me/v627621203/44b3f/B3tf3FHvNzQ.jpg', 'da1af7a1e4ee5d9bc74caedf5b39aa2a', '127.0.0.1', 'Robokassa', 0, 0, 0, ''),
(421, 'bill[18641492]', '18641492', 'BRONZE RANDOM STEAM KEY', 'admin@admin.com', '20-11-2016', 27, 1, '30', 'http://cs627621.vk.me/v627621203/44b3f/B3tf3FHvNzQ.jpg', 'da1af7a1e4ee5d9bc74caedf5b39aa2a', '127.0.0.1', 'Robokassa', 0, 0, 0, ''),
(422, 'bill[21454535]', '21454535', 'BRONZE RANDOM STEAM KEY', 'admin@admin.com', '20-11-2016', 27, 1, '30', 'http://cs627621.vk.me/v627621203/44b3f/B3tf3FHvNzQ.jpg', 'da1af7a1e4ee5d9bc74caedf5b39aa2a', '127.0.0.1', 'QIWI', 0, 0, 0, ''),
(423, 'bill[98141818]', '98141818', 'GOLD RANDOM STEAM KEY', 'svr24host@mail.ru', '20-11-2016', 25, 1, '40', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', 'bd94ed90d49417bb87b9760698c3bf42', '127.0.0.1', 'QIWI', 0, 0, 0, ''),
(424, 'bill[55683051]', '55683051', 'GOLD RANDOM STEAM KEY', 'testpoybokse@mail.ru', '20-11-2016', 25, 1, '40', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', '89082ae9960d77a6d70d992d416caace', '127.0.0.1', 'QIWI', 0, 0, 0, ''),
(425, 'bill[39599609]', '39599609', 'GOLD RANDOM STEAM KEY', 'svr24host@mail.ru', '20-11-2016', 25, 1, '40', 'http://cs627621.vk.me/v627621203/44b48/FaTMsWijZv8.jpg', 'eba385c4e7b74b69ab2e2d89f6caa7bf', '127.0.0.1', 'QIWI', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET cp1251 NOT NULL,
  `slug` varchar(100) CHARACTER SET cp1251 NOT NULL,
  `order` int(11) NOT NULL,
  `body` text CHARACTER SET cp1251 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `order`, `body`) VALUES
(5, 'Соглашение', 'agreement', 0, '<h2><b>Термины и определения</b></h2><h2><b>\nЗаказ - запрос Покупателя на получение Товара, оформленный в соответствии с требованиями Сайта. Покупатель - физическое лицо, либо оформляющее Заказы на сайте, либо использующее приобретенные на сайте Товары. Цифровой товар - лицензионный электронный ключ или аккаунт программного продукта. Сувениры - физический товар доставляемый почтой. Вещи - предметы из той или иной игры, передающиеся по средствам обмена в сервисе Steam.&nbsp;\n</b><br><b>1.1. Продавец является владельцем Сайта, осуществляющим его администрирование.&nbsp;</b><br><b>1.2. При оформлении Заказа, Покупатель принимает Условия соглашения.&nbsp;</b><br><b>1.3. Покупатель соглашается с Условиями нажатием кнопки «Купить» на последнем этапе оформления Заказа на сайте.&nbsp;</b><br><b>1.4. Сайт оказывает услуги только на территории РФ и стран СНГ, при этом некоторые Товары имеют региональные ограничения и предназначены для активации на территории РФ, Украины и стран СНГ.</b><br><b>2.1. При оформлении Заказа Покупатель должен указать электронный адрес, на который будет доставлен Товар.&nbsp;</b><br><b>2.2. Доставка Цифрового товара осуществляется сразу же после оплаты.&nbsp;</b><br><b>2.3. Любая информация, представленная на сайте, носит справочный характер. Для уточнения свойств и характеристик Цифрового товара/Сувениров, Покупатель должен обратиться к Продавцу.&nbsp;</b><br><b>2.4. Доставка Сувениров осуществляется в срок до 50 дней с момента составления Заказа.&nbsp;</b><br><b>2.5. После заказа, доставка Вещей осуществляется в срок до 24 часов.&nbsp;</b><br><b>2.6. Если Покупателем не будет принят обмен в течении 45 минут, сделка аннулируется без возврата средств.&nbsp;</b><br><b>2.7. При скрытом или заблокированном инвентаре Покупателя, Вещь не может быть доставлена и сделка, так же, аннулируется без возврата средств.&nbsp;</b><br><b>2.8. При блокировке аккаунта Покупателя, Вещь не может быть доставлена и сделка, так же, аннулируется без возврата средств.</b><br><b>3.1. Цена Товара указана на сайте и может быть изменена Продавцом в одностороннем порядке.&nbsp;</b><br><b>3.2. Действующая цена указывается на последнем этапе оформления Заказа. После нажатия кнопки «Купить», цена не может быть изменена Продавцом.</b><br><b>3.3. Покупатель может выбрать любой способ оплаты из доступных.&nbsp;</b><br><b>4.1. Цифровой товар, приобретенный Покупателем, подлежит возврату или обмену, в случае если товар был невалидным с момента покупки. Заявка на обмен принимается не позднее 30 минут с момента покупки.&nbsp;</b><br><b>4.2. Если вы получили товар ненадлежащего качества, мы приносим свои глубочайшие извинения. Мы готовы поменять товар или вернуть вам денежные средства. Заявления на возврат и обмен принимаются в течение 7 дней с момента получения заказа.&nbsp;</b><br><b>4.3. В случае возврата / обмена стоимость доставки товара от Покупателя Продавцу, оплачивается Покупателем.</b><br><b>5.1. Соблюдать авторские права, установленные законодательством РФ и СНГ. Использовать Товар только в личных некоммерческих целях.&nbsp;</b><br><b>6.Права и обязанности сторон 6.1. Продавец имеет право переуступать и/или передавать свои права и обязанности, вытекающие из его отношений с Покупателем, третьим лицам.&nbsp;</b><br><b>6.2. Продавец может предоставлять Покупателю скидки и бонусы. Их виды, правила начисления и условия получения указаны на сайте в разделах «Бонус», «Промо-код» и «Скидка».&nbsp;</b><br><b>6.3. Продавец может менять скидки и бонусы, а также правила их начисления и условия получения в одностороннем порядке.&nbsp;</b><br><b>6.4. Клиент обязуется использовать приобретенный Товар исключительно для личных, домашних, семейных целей, а также целей, не связанных с осуществлением коммерческой деятельности.</b><br><b>7.1. При возникновении вопросов, Покупатель имеет право обратиться к Продавцу по любому контакту, указанному на сайте в разделе «Поддержка».&nbsp;</b><br><b>7.2. Все возникающее споры стороны будут стараться решить путем переговоров.&nbsp;</b><br><b>7.4. Продавец не отвечает за действия почты, курьерских служб и транспортных компаний и не может влиять на скорость доставки. Указанные на сайте почты сроки доставки являются приблизительными.</b><br><b>8.1. Любая персональная информация, полученная Покупателем и Продавцом с помощью Сайта, является конфиденциальной.&nbsp;</b><br><b>8.2. Стороны обязуются соблюдать законодательство РФ и не разглашать конфиденциальную информацию третьим лицам.&nbsp;</b><br><b>8.3. Для выполнения своих обязательств по продаже Товара, Продавец собирает следующую информацию о Покупателе: - личную информацию, которую Покупатель сознательно предоставил Продавцу; - техническую информацию, собираемую программным обеспечением Продавца во время посещения Сайта Покупателем.&nbsp;</b><br><b>8.4. Пользователь дает Продавцу разрешение на сбор, обработку и хранение своих персональных данных.&nbsp;</b><br><b>8.5. Продавец никогда и никому не предоставляет персональную информацию Покупателя, кроме случаев, предусмотренных законодательством РФ.</b></h2><h2><b>1. Общие положения</b></h2><b>\n</b><h2><b>2. Порядок оформления Заказа и доставка Товара</b></h2><b>\n</b><h2><b>3. Оплата Товара</b></h2><b>\n</b><h2><b>4. Возврат и обмен Товара</b></h2><b>\n</b><h2><b>5. Авторское право</b></h2><b>\n</b><h2><b>6. Прочие условия</b></h2><b>\n</b><h2><b>8. Конфиденциальность</b></h2>'),
(6, 'Поддержка', 'support', 0, '<div><span>Если у вас возникают вопросы, вы можете написать в тех.поддержку. Если вам попался невалидный товар, то нужно предъявить чек, время покупки, email.<br></span><br><a href="https://vk.com/im?media=&amp;sel=-93065171" target="_blank" rel=""><img width="542" alt="" src="http://one-shop.su/43.png" height="45"></a></div>'),
(7, 'Гарантии', 'warranty', 0, '<center>\r\n<br>\r\n1. ВСЕ НАШИ КЛЮЧИ КУПЛЕНЫ У ОФИЦИАЛЬНЫХ ЛИДЕРОВ В РОССИИ, ТАКИХ КАК BUKA, 1С И АКЕЛЛА.\r\n<br>\r\n2. МЫ ИМЕЕМ АТТЕСТАТ ПРОДАВЦА WEBMONEY С ВЫСОКИМ BL (148+ ).\r\n<br>\r\n3. У НАС ИДЕНТИФИЦИРОВАННЫЙ КОШЕЛЁК ЯНДЕКС.ДЕНЬГИ.\r\n<br>\r\n4. МЫ ПРОШЛИ ПРОВЕРКУ В СИСТЕМЕ ROBOKASSA, И МОЖЕМ ПРЕДОСТАВИТЬ БОЛЬШОЕ КОЛИЧЕСТВО СПОСОБОВ ОПЛАТЫ.\r\n<br>\r\n5. НА ГЛАВНОЙ СТРАНИЦЕ ВЫ МОЖЕТЕ ПОЧИТАТЬ ОТЗЫВЫ И КОММЕНТАРИИ РЕАЛЬНЫХ УЧАСТНИКОВ ПРОЕКТА.\r\n<br>\r\n6. КЛЮЧИ ХРАНЯТЬСЯ В СИСТЕМЕ, ПОЭТОМУ ДОСТАВЛЯЮТСЯ МГНОВЕННО ПОСЛЕ ПОБЕДЫ.\r\n<br>\r\n7. У НАС ИМЕЕТСЯ ПОЛЬЗОВАТЕЛЬСКАЯ ПОДДЕРЖКА 24/7, МЫ ВСЕГДА РАДЫ ОТВЕТИТЬ НА ВАШИ ВОПРОСЫ!\r\n<br>\r\n</center>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  `group` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `group`) VALUES
(45, 'mrgreezly@bk.ru', '3c4d73c5dc094d1127e721cc2d58b116', 'admin', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `version`
--

INSERT INTO `version` (`version`) VALUES
(6);

-- --------------------------------------------------------

--
-- Структура таблицы `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `id` int(255) NOT NULL,
  `sviews` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config_data`
--
ALTER TABLE `config_data`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kupons`
--
ALTER TABLE `kupons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT для таблицы `ip`
--
ALTER TABLE `ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `kupons`
--
ALTER TABLE `kupons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=426;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `views`
--
ALTER TABLE `views`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
