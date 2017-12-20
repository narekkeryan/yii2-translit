<?php

namespace keryan\translit;

/**
 * Translit helper class for Armenian
 *
 * @author Narek Keryan <narek.keryan@gmail.com>
 */
class Translit {

    /**
     * Translate armenian letters to latin
     *
     * @param string $content Text
     *
     * @return string
     */
    public static function translit($content) {

        $matrix = [
            "Ա" => "a", "Բ" => "b", "Գ" => "g", "Դ" => "d", "Ե" => "ye",
            "Զ" => "z", "Է" => "e", "Ը" => "y", "Թ" => "t'", "Ժ" => "zh",
            "Ի" => "i", "Լ" => "l", "Խ" => "kh", "Ծ" => "ts", "Կ" => "k",
            "Հ" => "h", "Ձ" => "dz", "Ղ" => "gh", "Ճ" => "ch", "Մ" => "m",
            "Յ" => "y", "Ն" => "n", "Շ" => "sh", "Ո" => "vo", "Չ" => "ch'",
            "Պ" => "p", "Ջ" => "j", "Ռ" => "r'", "Ս" => "s", "Վ" => "v",
            "Տ" => "t", "Ր" => "r", "Ց" => "ts'", "ՈՒ" => "u", "Փ" => "p'",
            "Ք" => "k'", "ԵՎ" => "yev", "Օ" => "o", "Ֆ" => "f",

            "ա" => "a", "բ" => "b", "գ" => "g", "դ" => "d", "ե" => "ye",
            "զ" => "z", "է" => "e", "ը" => "y", "թ" => "t'", "ժ" => "zh",
            "ի" => "i", "լ" => "l", "խ" => "kh", "ծ" => "ts", "կ" => "k",
            "հ" => "h", "զ" => "dz", "ղ" => "gh", "ճ" => "ch", "մ" => "m",
            "յ" => "y", "ն" => "n", "շ" => "sh", "ո" => "vo", "չ" => "ch'",
            "պ" => "p", "ջ" => "j", "ռ" => "r'", "ս" => "s", "վ" => "v",
            "տ" => "t", "ր" => "r", "ց" => "ts'", "ու" => "u", "փ" => "p'",
            "ք" => "k'", "և" => "yev", "օ" => "o", "ֆ" => "f",

            "«" => "", "»" => "", "—" => "-", "`" => "", " " => "-",
            "[" => "", "]" => "", "{" => "", "}" => "", "<" => "", ">" => "",
            "?" => "", "," => "", "*" => "", "%" => "", "$" => "",
            "@" => "", "!" => "", ";" => "", ":" => "", "^" => "", "\"" => "",
            "&" => "", "=" => "", "№" => "", "\\" => "", "/" => "", "#" => "",
            "(" => "", ")" => "", "~" => "", "|" => "", "+" => "", "”" => "", "“" => "",
            "'" => "",
            "’" => "",
            "–" => "-",
            "™" => "tm",
            "©" => "c",
            "®" => "r",
            "…" => "",
            "„" => "",
            "." => "-",
        ];

        $content = strtr($content, $matrix);
        $content = htmlentities($content);
        $content = strtr(trim($content), $matrix);
        $content = str_replace('---', '-', $content);
        $content = str_replace('--', '-', $content);
        $content = strtolower($content);

        return $content;

    }

}