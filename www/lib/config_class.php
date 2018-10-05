<?php

abstract class Config
{
    const SITENAME = 'ws.dtokarev.ru';
    const SECRET = 'DGLEGLN';
    const ADDRESS = 'http://ws.dtokarev.ru';
    const ADM_NAME = 'Denis Tokarev';
    const ADM_EMAIL = 'admin@ws.dtokarev.ru';

    const DB_HOST = 'localhost';
    const DB_USER = 'ws_user';
    const DB_PASSWORD = '';
    const DB_NAME = 'ws';
    const DB_PREFIX = 'xyz_';

    const DIR_IMG = '/images/';
    const DIR_IMG_ARTICLES = '/images/articles/';
    const DIR_IMG_AVATAR = '/images/avatar/';
    const DIR_TMPL = '/ws.dtokarev.ru/www/tmpl/';
    const DIR_EMAILS = '/ws.dtokarev.ru/www/tmpl/emails/';

    const FILE_MESSAGES = '/ws.dtokarev.ru/www/text/messages.ini';

    const COUNT_ARTICLES_ON_PAGE = 3;
    const COUNT_SHOW_PAGES = 10;

    const MIN_SEARCH_LEN = 3;
    const LEN_SEARCH_RES = 255;

    const DEFAULT_AVATAR = 'default.png';
    const MAX_SIZE_AVATAR = 102400;
}