<?php
// auto-generated by sfRoutingConfigHandler
// date: 2021/12/22 14:24:07
$this->routes['affiliate_new'] = unserialize('C:15:"sfDoctrineRoute":1873:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:9:"affiliate";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"new";i:3;N;}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:15:"JobeetAffiliate";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:37:"/:sf_culture/affiliate/new.:sf_format";i:4;s:0:"";i:5;s:72:"#^/(?P<sf_culture>[^/\\.]+)/affiliate/new(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:10:"sf_culture";s:11:":sf_culture";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:9:"affiliate";s:6:"action";s:3:"new";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['affiliate_create'] = unserialize('C:15:"sfDoctrineRoute":1738:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:9:"affiliate";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:15:"JobeetAffiliate";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:33:"/:sf_culture/affiliate.:sf_format";i:4;s:0:"";i:5;s:68:"#^/(?P<sf_culture>[^/\\.]+)/affiliate(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:10:"sf_culture";s:11:":sf_culture";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:9:"affiliate";s:6:"action";s:6:"create";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:4:"post";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['affiliate_wait'] = unserialize('C:15:"sfDoctrineRoute":2040:{a:11:{i:0;a:10:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:9:"affiliate";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"wait";i:3;N;}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:9;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:15:"JobeetAffiliate";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:42:"/:sf_culture/affiliate/:id/wait.:sf_format";i:4;s:0:"";i:5;s:85:"#^/(?P<sf_culture>[^/\\.]+)/affiliate/(?P<id>\\d+)/wait(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:9:"affiliate";s:6:"action";s:4:"wait";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:3:"get";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['category'] = unserialize('C:15:"sfDoctrineRoute":1942:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"category";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:5:":slug";i:3;s:4:"slug";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:14:"JobeetCategory";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:38:"/:sf_culture/category/:slug.:sf_format";i:4;s:0:"";i:5;s:91:"#^/(?P<sf_culture>[^/\\.]+)/category/(?P<slug>[^/\\.]+)(?:\\.(?P<sf_format>(?:html|atom)))?$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:4:"slug";s:5:":slug";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:8:"category";s:6:"action";s:4:"show";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:9:"sf_format";s:13:"(?:html|atom)";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:10:"sf_culture";s:7:"[^/\\.]+";s:4:"slug";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_search'] = unserialize('C:7:"sfRoute":1335:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:6:"search";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:19:"/:sf_culture/search";i:4;s:0:"";i:5;s:36:"#^/(?P<sf_culture>[^/\\.]+)/search$#x";i:6;a:1:{s:10:"sf_culture";s:11:":sf_culture";}i:7;a:2:{s:6:"module";s:3:"job";s:6:"action";s:6:"search";}i:8;a:1:{s:10:"sf_culture";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job'] = unserialize('C:15:"sfDoctrineRoute":1736:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:4:"list";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:27:"/:sf_culture/job.:sf_format";i:4;s:0:"";i:5;s:62:"#^/(?P<sf_culture>[^/\\.]+)/job(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:10:"sf_culture";s:11:":sf_culture";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:5:"index";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_new'] = unserialize('C:15:"sfDoctrineRoute":1845:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"new";i:3;N;}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:31:"/:sf_culture/job/new.:sf_format";i:4;s:0:"";i:5;s:66:"#^/(?P<sf_culture>[^/\\.]+)/job/new(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:10:"sf_culture";s:11:":sf_culture";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:3:"new";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_create'] = unserialize('C:15:"sfDoctrineRoute":1710:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:27:"/:sf_culture/job.:sf_format";i:4;s:0:"";i:5;s:62:"#^/(?P<sf_culture>[^/\\.]+)/job(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:10:"sf_culture";s:11:":sf_culture";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:6:"create";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:1:{i:0;s:4:"post";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_edit'] = unserialize('C:15:"sfDoctrineRoute":2045:{a:11:{i:0;a:10:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:6:":token";i:3;s:5:"token";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"edit";i:3;N;}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:9;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:39:"/:sf_culture/job/:token/edit.:sf_format";i:4;s:0:"";i:5;s:82:"#^/(?P<sf_culture>[^/\\.]+)/job/(?P<token>\\w+)/edit(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:5:"token";s:6:":token";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:4:"edit";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_update'] = unserialize('C:15:"sfDoctrineRoute":1904:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:6:":token";i:3;s:5:"token";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:34:"/:sf_culture/job/:token.:sf_format";i:4;s:0:"";i:5;s:77:"#^/(?P<sf_culture>[^/\\.]+)/job/(?P<token>\\w+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:5:"token";s:6:":token";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:6:"update";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:1:{i:0;s:3:"put";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_delete'] = unserialize('C:15:"sfDoctrineRoute":1907:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:6:":token";i:3;s:5:"token";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:34:"/:sf_culture/job/:token.:sf_format";i:4;s:0:"";i:5;s:77:"#^/(?P<sf_culture>[^/\\.]+)/job/(?P<token>\\w+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:5:"token";s:6:":token";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:6:"delete";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:1:{i:0;s:6:"delete";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_show'] = unserialize('C:15:"sfDoctrineRoute":1917:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:6:":token";i:3;s:5:"token";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:34:"/:sf_culture/job/:token.:sf_format";i:4;s:0:"";i:5;s:77:"#^/(?P<sf_culture>[^/\\.]+)/job/(?P<token>\\w+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:5:"token";s:6:":token";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:4:"show";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_publish'] = unserialize('C:15:"sfDoctrineRoute":2042:{a:11:{i:0;a:10:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:6:":token";i:3;s:5:"token";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:7:"publish";i:3;N;}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:9;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:42:"/:sf_culture/job/:token/publish.:sf_format";i:4;s:0:"";i:5;s:85:"#^/(?P<sf_culture>[^/\\.]+)/job/(?P<token>\\w+)/publish(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:5:"token";s:6:":token";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:7:"publish";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:1:{i:0;s:3:"put";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_extend'] = unserialize('C:15:"sfDoctrineRoute":2038:{a:11:{i:0;a:10:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:6:":token";i:3;s:5:"token";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:6:"extend";i:3;N;}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:9;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:41:"/:sf_culture/job/:token/extend.:sf_format";i:4;s:0:"";i:5;s:84:"#^/(?P<sf_culture>[^/\\.]+)/job/(?P<token>\\w+)/extend(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:5:"token";s:6:":token";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:6:"extend";s:9:"sf_format";s:4:"html";}i:8;a:4:{s:5:"token";s:3:"\\w+";s:9:"sf_method";a:1:{i:0;s:3:"put";}s:10:"sf_culture";s:7:"[^/\\.]+";s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_show_user'] = unserialize('C:15:"sfDoctrineRoute":2452:{a:11:{i:0;a:12:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:13:":company_slug";i:3;s:12:"company_slug";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:14:":location_slug";i:3;s:13:"location_slug";}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:9;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:10;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:11;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:14:":position_slug";i:3;s:13:"position_slug";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:16:"method_for_query";s:17:"retrieveActiveJob";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:64:"/:sf_culture/job/:company_slug/:location_slug/:id/:position_slug";i:4;s:0:"";i:5;s:125:"#^/(?P<sf_culture>[^/\\.]+)/job/(?P<company_slug>[^/\\.]+)/(?P<location_slug>[^/\\.]+)/(?P<id>\\d+)/(?P<position_slug>[^/\\.]+)$#x";i:6;a:5:{s:10:"sf_culture";s:11:":sf_culture";s:12:"company_slug";s:13:":company_slug";s:13:"location_slug";s:14:":location_slug";s:2:"id";s:3:":id";s:13:"position_slug";s:14:":position_slug";}i:7;a:2:{s:6:"module";s:3:"job";s:6:"action";s:4:"show";}i:8;a:6:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:3:"get";}s:10:"sf_culture";s:7:"[^/\\.]+";s:12:"company_slug";s:7:"[^/\\.]+";s:13:"location_slug";s:7:"[^/\\.]+";s:13:"position_slug";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['api_jobs'] = unserialize('C:15:"sfDoctrineRoute":1810:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"api";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:6:":token";i:3;s:5:"token";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"jobs";i:3;N;}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:4:"list";s:6:"method";s:11:"getForToken";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:27:"/api/:token/jobs.:sf_format";i:4;s:4:"/api";i:5;s:67:"#^/api/(?P<token>[^/\\.]+)/jobs\\.(?P<sf_format>(?:xml|json|yaml))$#x";i:6;a:2:{s:5:"token";s:6:":token";s:9:"sf_format";s:10:":sf_format";}i:7;a:2:{s:6:"module";s:3:"api";s:6:"action";s:4:"list";}i:8;a:3:{s:9:"sf_format";s:17:"(?:xml|json|yaml)";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:5:"token";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['localized_homepage'] = unserialize('C:7:"sfRoute":1321:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:13:"/:sf_culture/";i:4;s:0:"";i:5;s:32:"#^/(?P<sf_culture>(?:fr|en))/$#x";i:6;a:1:{s:10:"sf_culture";s:11:":sf_culture";}i:7;a:2:{s:6:"module";s:3:"job";s:6:"action";s:5:"index";}i:8;a:1:{s:10:"sf_culture";s:9:"(?:fr|en)";}i:9;s:1:"/";i:10;b:0;}}');
$this->routes['homepage'] = unserialize('C:7:"sfRoute":1065:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:1:"/";i:4;s:0:"";i:5;s:6:"#^/$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:3:"job";s:6:"action";s:5:"index";}i:8;a:0:{}i:9;s:1:"/";i:10;b:0;}}');
