<?php

/**
 *
 */
  define("__PATH",BASEPATH."libraries/");
  const TEMP_CONT_NAME_CONTENT = '/{%temp\w+\W+\w+.\w+\W%}|{%sect\w+\W+\w+\W%}|{%sect\w+%}/';

  const GET_WHOLE_TEMP_CONT = '/templ*\w+=\W\w+.\w+\W|section=\W\w+\W|{%section\W+\w+\W+}((.|\n)*){%sectionend%}/';

  const PATTERNS = array(
                  "/templ*\w+=\W\w+.\w+\W/",
                  "/sec\w+\W+\w+\W/",
                  "/{%section\W+\w+\W+}((.|\n)*){%sectionend%}/"
                );


  const TEMPLATE_VARIABLE = "/{{\w+}}/";
  const PHP_VARIABLE = "/\\$[a-z A-Z 0-9_.]+/";

  const DEFAULT_CONTENT = '/{%content\W+\w+\W%}/';
  const CONT_NAME_START = '/{%content\W+';
  const CONT_NAME_END = '\W%}/';

  const CONT_TEMPLATE_VARIABLE = "/\W+/";

  const CONT_GLOBAL_START = "\$GLOBALS['";
  const CONT_GLOBAL_END = "']";
