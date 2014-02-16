echo "/*!
 * Bootstrap v3.1.1 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
" >  ./css/bootstrap.min.css
lessc --compress ./less/bootstrap.less >> ./css/bootstrap.min.css