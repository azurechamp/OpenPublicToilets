<?php
// $Id: ascii_art_captcha_font_doom.inc,v 1.2 2007/09/18 21:13:22 soxofaan Exp $
// Font definition based on figlet font "doom" (http://www.figlet.org/)
// as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)

function ASCII_art_captcha_font_doom() {
  $font = array();
  $font['height'] = 8;
  $font['name'] = 'doom';
  $font['comment'] = 'DOOM by Frans P. de Vries <fpv@xymph.iaf.nl>  18 Jun 1996based on Big by Glenn Chappell 4/93 -- based on Standardfiglet release 2.1 -- 12 Aug 1994Permission is hereby given to modify this font, as long as themodifier\'s name is placed on a comment line.Explanation of first line:flf2 - "magic number" for file identificationa    - should always be `a\', for now$    - the "hardblank" -- prints as a blank, but can\'t be smushed8    - height of a character6    - height of a character, not including descenders14   - max line length (excluding comment lines) + a fudge factor15   - default smushmode for this font16   - number of comment lines';
  $font['a'] = array(
    '       ',
    '       ',
    '  __ _ ',
    ' / _` |',
    '| (_| |',
    ' \\__,_|',
    '       ',
    '       ',
  );
  $font['b'] = array(
    ' _     ',
    '| |    ',
    '| |__  ',
    '| \'_ \\ ',
    '| |_) |',
    '|_.__/ ',
    '       ',
    '       ',
  );
  $font['c'] = array(
    '      ',
    '      ',
    '  ___ ',
    ' / __|',
    '| (__ ',
    ' \\___|',
    '      ',
    '      ',
  );
  $font['d'] = array(
    '     _ ',
    '    | |',
    '  __| |',
    ' / _` |',
    '| (_| |',
    ' \\__,_|',
    '       ',
    '       ',
  );
  $font['e'] = array(
    '      ',
    '      ',
    '  ___ ',
    ' / _ \\',
    '|  __/',
    ' \\___|',
    '      ',
    '      ',
  );
  $font['f'] = array(
    '  __ ',
    ' / _|',
    '| |_ ',
    '|  _|',
    '| |  ',
    '|_|  ',
    '     ',
    '     ',
  );
  $font['g'] = array(
    '       ',
    '       ',
    '  __ _ ',
    ' / _` |',
    '| (_| |',
    ' \\__, |',
    '  __/ |',
    ' |___/ ',
  );
  $font['h'] = array(
    ' _     ',
    '| |    ',
    '| |__  ',
    '| \'_ \\ ',
    '| | | |',
    '|_| |_|',
    '       ',
    '       ',
  );
  $font['i'] = array(
    ' _ ',
    '(_)',
    ' _ ',
    '| |',
    '| |',
    '|_|',
    '   ',
    '   ',
  );
  $font['j'] = array(
    '   _ ',
    '  (_)',
    '   _ ',
    '  | |',
    '  | |',
    '  | |',
    ' _/ |',
    '|__/ ',
  );
  $font['k'] = array(
    ' _    ',
    '| |   ',
    '| | __',
    '| |/ /',
    '|   < ',
    '|_|\\_\\',
    '      ',
    '      ',
  );
  $font['l'] = array(
    ' _ ',
    '| |',
    '| |',
    '| |',
    '| |',
    '|_|',
    '   ',
    '   ',
  );
  $font['m'] = array(
    '           ',
    '           ',
    ' _ __ ___  ',
    '| \'_ ` _ \\ ',
    '| | | | | |',
    '|_| |_| |_|',
    '           ',
    '           ',
  );
  $font['n'] = array(
    '       ',
    '       ',
    ' _ __  ',
    '| \'_ \\ ',
    '| | | |',
    '|_| |_|',
    '       ',
    '       ',
  );
  $font['o'] = array(
    '       ',
    '       ',
    '  ___  ',
    ' / _ \\ ',
    '| (_) |',
    ' \\___/ ',
    '       ',
    '       ',
  );
  $font['p'] = array(
    '       ',
    '       ',
    ' _ __  ',
    '| \'_ \\ ',
    '| |_) |',
    '| .__/ ',
    '| |    ',
    '|_|    ',
  );
  $font['q'] = array(
    '       ',
    '       ',
    '  __ _ ',
    ' / _` |',
    '| (_| |',
    ' \\__, |',
    '    | |',
    '    |_|',
  );
  $font['r'] = array(
    '      ',
    '      ',
    ' _ __ ',
    '| \'__|',
    '| |   ',
    '|_|   ',
    '      ',
    '      ',
  );
  $font['s'] = array(
    '     ',
    '     ',
    ' ___ ',
    '/ __|',
    '\\__ \\',
    '|___/',
    '     ',
    '     ',
  );
  $font['t'] = array(
    ' _   ',
    '| |  ',
    '| |_ ',
    '| __|',
    '| |_ ',
    ' \\__|',
    '     ',
    '     ',
  );
  $font['u'] = array(
    '       ',
    '       ',
    ' _   _ ',
    '| | | |',
    '| |_| |',
    ' \\__,_|',
    '       ',
    '       ',
  );
  $font['v'] = array(
    '       ',
    '       ',
    '__   __',
    '\\ \\ / /',
    ' \\ V / ',
    '  \\_/  ',
    '       ',
    '       ',
  );
  $font['w'] = array(
    '          ',
    '          ',
    '__      __',
    '\\ \\ /\\ / /',
    ' \\ V  V / ',
    '  \\_/\\_/  ',
    '          ',
    '          ',
  );
  $font['x'] = array(
    '      ',
    '      ',
    '__  __',
    '\\ \\/ /',
    ' >  < ',
    '/_/\\_\\',
    '      ',
    '      ',
  );
  $font['y'] = array(
    '       ',
    '       ',
    ' _   _ ',
    '| | | |',
    '| |_| |',
    ' \\__, |',
    '  __/ |',
    ' |___/ ',
  );
  $font['z'] = array(
    '     ',
    '     ',
    ' ____',
    '|_  /',
    ' / / ',
    '/___|',
    '     ',
    '     ',
  );
  $font['A'] = array(
    '  ___  ',
    ' / _ \\ ',
    '/ /_\\ \\',
    '|  _  |',
    '| | | |',
    '\\_| |_/',
    '       ',
    '       ',
  );
  $font['B'] = array(
    '______ ',
    '| ___ \\',
    '| |_/ /',
    '| ___ \\',
    '| |_/ /',
    '\\____/ ',
    '       ',
    '       ',
  );
  $font['C'] = array(
    ' _____ ',
    '/  __ \\',
    '| /  \\/',
    '| |    ',
    '| \\__/\\',
    ' \\____/',
    '       ',
    '       ',
  );
  $font['D'] = array(
    '______ ',
    '|  _  \\',
    '| | | |',
    '| | | |',
    '| |/ / ',
    '|___/  ',
    '       ',
    '       ',
  );
  $font['E'] = array(
    ' _____ ',
    '|  ___|',
    '| |__  ',
    '|  __| ',
    '| |___ ',
    '\\____/ ',
    '       ',
    '       ',
  );
  $font['F'] = array(
    '______ ',
    '|  ___|',
    '| |_   ',
    '|  _|  ',
    '| |    ',
    '\\_|    ',
    '       ',
    '       ',
  );
  $font['G'] = array(
    ' _____ ',
    '|  __ \\',
    '| |  \\/',
    '| | __ ',
    '| |_\\ \\',
    ' \\____/',
    '       ',
    '       ',
  );
  $font['H'] = array(
    ' _   _ ',
    '| | | |',
    '| |_| |',
    '|  _  |',
    '| | | |',
    '\\_| |_/',
    '       ',
    '       ',
  );
  $font['I'] = array(
    ' _____ ',
    '|_   _|',
    '  | |  ',
    '  | |  ',
    ' _| |_ ',
    ' \\___/ ',
    '       ',
    '       ',
  );
  $font['J'] = array(
    '   ___ ',
    '  |_  |',
    '    | |',
    '    | |',
    '/\\__/ /',
    '\\____/ ',
    '       ',
    '       ',
  );
  $font['K'] = array(
    ' _   __',
    '| | / /',
    '| |/ / ',
    '|    \\ ',
    '| |\\  \\',
    '\\_| \\_/',
    '       ',
    '       ',
  );
  $font['L'] = array(
    ' _     ',
    '| |    ',
    '| |    ',
    '| |    ',
    '| |____',
    '\\_____/',
    '       ',
    '       ',
  );
  $font['M'] = array(
    '___  ___',
    '|  \\/  |',
    '| .  . |',
    '| |\\/| |',
    '| |  | |',
    '\\_|  |_/',
    '        ',
    '        ',
  );
  $font['N'] = array(
    ' _   _ ',
    '| \\ | |',
    '|  \\| |',
    '| . ` |',
    '| |\\  |',
    '\\_| \\_/',
    '       ',
    '       ',
  );
  $font['O'] = array(
    ' _____ ',
    '|  _  |',
    '| | | |',
    '| | | |',
    '\\ \\_/ /',
    ' \\___/ ',
    '       ',
    '       ',
  );
  $font['P'] = array(
    '______ ',
    '| ___ \\',
    '| |_/ /',
    '|  __/ ',
    '| |    ',
    '\\_|    ',
    '       ',
    '       ',
  );
  $font['Q'] = array(
    ' _____ ',
    '|  _  |',
    '| | | |',
    '| | | |',
    '\\ \\/\' /',
    ' \\_/\\_\\',
    '       ',
    '       ',
  );
  $font['R'] = array(
    '______ ',
    '| ___ \\',
    '| |_/ /',
    '|    / ',
    '| |\\ \\ ',
    '\\_| \\_|',
    '       ',
    '       ',
  );
  $font['S'] = array(
    ' _____ ',
    '/  ___|',
    '\\ `--. ',
    ' `--. \\',
    '/\\__/ /',
    '\\____/ ',
    '       ',
    '       ',
  );
  $font['T'] = array(
    ' _____ ',
    '|_   _|',
    '  | |  ',
    '  | |  ',
    '  | |  ',
    '  \\_/  ',
    '       ',
    '       ',
  );
  $font['U'] = array(
    ' _   _ ',
    '| | | |',
    '| | | |',
    '| | | |',
    '| |_| |',
    ' \\___/ ',
    '       ',
    '       ',
  );
  $font['V'] = array(
    ' _   _ ',
    '| | | |',
    '| | | |',
    '| | | |',
    '\\ \\_/ /',
    ' \\___/ ',
    '       ',
    '       ',
  );
  $font['W'] = array(
    ' _    _ ',
    '| |  | |',
    '| |  | |',
    '| |/\\| |',
    '\\  /\\  /',
    ' \\/  \\/ ',
    '        ',
    '        ',
  );
  $font['X'] = array(
    '__   __',
    '\\ \\ / /',
    ' \\ V / ',
    ' /   \\ ',
    '/ /^\\ \\',
    '\\/   \\/',
    '       ',
    '       ',
  );
  $font['Y'] = array(
    '__   __',
    '\\ \\ / /',
    ' \\ V / ',
    '  \\ /  ',
    '  | |  ',
    '  \\_/  ',
    '       ',
    '       ',
  );
  $font['Z'] = array(
    ' ______',
    '|___  /',
    '   / / ',
    '  / /  ',
    './ /___',
    '\\_____/',
    '       ',
    '       ',
  );
  $font['0'] = array(
    ' _____ ',
    '|  _  |',
    '| |/\' |',
    '|  /| |',
    '\\ |_/ /',
    ' \\___/ ',
    '       ',
    '       ',
  );
  $font['1'] = array(
    ' __  ',
    '/  | ',
    '`| | ',
    ' | | ',
    '_| |_',
    '\\___/',
    '     ',
    '     ',
  );
  $font['2'] = array(
    ' _____ ',
    '/ __  \\',
    '`\' / /\'',
    '  / /  ',
    './ /___',
    '\\_____/',
    '       ',
    '       ',
  );
  $font['3'] = array(
    ' _____ ',
    '|____ |',
    '    / /',
    '    \\ \\',
    '.___/ /',
    '\\____/ ',
    '       ',
    '       ',
  );
  $font['4'] = array(
    '   ___ ',
    '  /   |',
    ' / /| |',
    '/ /_| |',
    '\\___  |',
    '    |_/',
    '       ',
    '       ',
  );
  $font['5'] = array(
    ' _____ ',
    '|  ___|',
    '|___ \\ ',
    '    \\ \\',
    '/\\__/ /',
    '\\____/ ',
    '       ',
    '       ',
  );
  $font['6'] = array(
    '  ____ ',
    ' / ___|',
    '/ /___ ',
    '| ___ \\',
    '| \\_/ |',
    '\\_____/',
    '       ',
    '       ',
  );
  $font['7'] = array(
    ' ______',
    '|___  /',
    '   / / ',
    '  / /  ',
    './ /   ',
    '\\_/    ',
    '       ',
    '       ',
  );
  $font['8'] = array(
    ' _____ ',
    '|  _  |',
    ' \\ V / ',
    ' / _ \\ ',
    '| |_| |',
    '\\_____/',
    '       ',
    '       ',
  );
  $font['9'] = array(
    ' _____ ',
    '|  _  |',
    '| |_| |',
    '\\____ |',
    '.___/ /',
    '\\____/ ',
    '       ',
    '       ',
  );

  return $font;
}
