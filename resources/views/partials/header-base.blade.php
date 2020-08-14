<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-faded {!! get_theme_mod('short_width_navbar') ? 'short-width-header' : '' !!}" role="navigation">

    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        @if (strlen(get_theme_mod('header_title_svg')) > 0)
            {!! get_theme_mod('header_title_svg') !!}
        @else
            <svg id="svg-miromannino" viewBox="0 0 4420 1106" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                <g transform="matrix(1,0,0,1,-184.744,-1375.99)">
                    <g transform="matrix(4.16667,0,0,4.16667,0,0)">
                        <g transform="matrix(1,0,0,1,190.501,465.158)">
                            <path d="M0,-6.238C-6.204,3.506 -15.477,9.784 -24.572,16.594C-34.048,23.688 -43.55,30.76 -54.103,36.2C-64.745,41.686 -76.006,45.849 -87.392,49.497C-99.912,53.508 -119.14,58.977 -129.16,47.311C-143.891,30.161 -138.65,1.957 -131.001,-16.983C-122.467,-38.116 -108.882,-57.115 -93.377,-73.682C-77.594,-90.545 -59.568,-106.434 -38.787,-116.819C-28.766,-121.826 -17.929,-125.681 -7.144,-128.677C6.015,-132.332 20.561,-134.828 33.678,-129.743C54.704,-121.591 59.948,-98.673 60.212,-78.34C60.531,-53.84 54.186,-30.345 47.011,-7.125C38.735,19.659 29.326,46.266 17.524,71.718C11.764,84.141 5.329,96.222 -0.65,108.536C-1.926,111.163 -3.067,113.854 -4.386,116.462C-5.142,117.955 -8.111,124.197 -9.489,124.233L-2.836,124.918C-4.754,124.196 -0.99,111.88 -0.492,110.262C1.155,104.91 3.145,99.674 4.783,94.319C7.93,84.033 11.073,73.744 14.551,63.564C21.55,43.083 30.171,23.25 40.379,4.162C50.354,-14.49 61.978,-32.229 76.299,-47.85C82.903,-55.053 89.842,-63.033 99.016,-66.95C99.621,-67.208 100.586,-67.404 101.104,-67.734C100.006,-67.032 98.91,-69.71 100.224,-67.692C101.536,-65.677 102.515,-64.592 102.949,-62.112C103.772,-57.408 103.046,-52.155 102.389,-47.467C100.734,-35.671 98.048,-23.549 94.733,-12.112C93.065,-6.355 90.994,-0.725 89.725,5.144C88.82,9.331 87.489,14.778 88.755,18.992C88.966,19.693 92.318,19.722 92.711,19.753C97.117,20.108 100.239,19.533 103.39,16.257C107.075,12.425 109.537,7.503 112.393,3.061C121.811,-11.592 129.926,-27.008 138.569,-42.116C147.232,-57.26 155.998,-72.41 165.67,-86.938C170.458,-94.129 175.517,-101.138 180.868,-107.922C185.691,-114.036 190.58,-121.092 197.496,-124.966L189.801,-125.514C193.953,-122.503 188.292,-110.039 187.175,-106.305C184.053,-95.866 180.395,-85.59 176.823,-75.299C169.436,-54.013 161.959,-32.755 155.092,-11.294C148.245,10.11 141.812,31.752 136.267,53.532C133.441,64.629 131.319,75.794 130.346,87.215C129.612,95.835 128.221,104.921 129.177,113.565C129.66,117.929 130.047,125.523 133.575,128.673C136.484,131.273 143.288,131.078 145.889,128.219C145.224,128.95 139.327,126.093 137.91,127.651C137.667,127.918 136.515,128.693 136.367,129.014C138.287,129.214 140.206,129.415 142.125,129.616C141.982,129.524 141.839,129.432 141.696,129.341C141.4,128.534 140.393,127.653 139.991,126.786C138.992,124.634 138.479,122.214 138.026,119.898C136.903,114.154 136.892,108.594 137.173,102.744C138.173,81.944 141.914,62.031 147.485,42.002C158.539,2.269 171.606,-36.692 185.119,-75.642C188.899,-86.538 192.773,-97.42 195.967,-108.507C197.119,-112.505 201.796,-122.114 197.514,-125.22C196.28,-126.115 191.15,-126.513 189.819,-125.768C184.22,-122.631 180.308,-117.626 176.294,-112.73C171.272,-106.604 166.499,-100.268 161.961,-93.775C152.51,-80.25 144.147,-66.007 135.848,-51.758C127.553,-37.515 119.792,-22.965 111.379,-8.792C108.019,-3.131 104.438,2.39 100.983,7.992C99.733,10.02 98.446,12.042 96.952,13.902C96.228,14.802 95.471,15.709 94.612,16.487C93.56,17.44 90.158,18.588 92.779,18.799C94.098,19.053 95.417,19.306 96.735,19.56C95.538,15.575 96.72,10.508 97.534,6.541C98.799,0.377 100.965,-5.513 102.713,-11.544C105.877,-22.459 108.314,-33.926 110.103,-45.148C111.117,-51.51 114.138,-65.639 105.794,-68.435C99.614,-70.507 92.945,-68.942 87.516,-65.793C78.555,-60.595 71.383,-52.023 64.645,-44.314C56.861,-35.408 49.927,-25.822 43.632,-15.815C31.199,3.949 20.752,25.24 12.354,47.017C7.359,59.969 3.105,73.193 -0.972,86.457C-4.721,98.653 -10.838,111.448 -11.048,124.349C-11.003,124.395 -10.959,124.441 -10.914,124.487C-8.733,125.308 -5.167,125.912 -2.871,125.247C-0.254,124.489 1.179,121.504 2.413,119.283C7.086,110.864 10.965,101.876 15.285,93.272C28.101,67.741 39.013,41.545 48.188,14.488C57.188,-12.056 66.716,-39.762 68.03,-67.98C69.076,-90.417 66.313,-118.837 42.721,-128.906C22.562,-137.511 -1.704,-133.895 -21.821,-127.361C-34.619,-123.204 -47.008,-118.075 -58.398,-110.853C-68.756,-104.284 -78.295,-96.497 -87.297,-88.187C-106.707,-70.27 -123.949,-49.515 -135.422,-25.582C-140.963,-14.024 -145.118,-1.715 -145.968,11.144C-146.779,23.406 -145.351,38.685 -136.095,47.875C-128.429,55.489 -114.878,55.763 -104.815,55.243C-90.134,54.486 -75.973,49.542 -62.403,44.189C-48.042,38.524 -35.147,30.92 -22.752,21.767C-11.771,13.657 0.512,6.06 7.979,-5.67C7.675,-5.191 0.977,-7.772 0,-6.238" style="fill:white;fill-rule:nonzero;" />
                        </g>
                    </g>
                    <g transform="matrix(4.16667,0,0,4.16667,0,0)">
                        <g transform="matrix(1,0,0,1,381.945,449.51)">
                            <path d="M0,7.144C0.241,7.182 0.482,7.219 0.723,7.257C-1.352,5.974 -3.425,4.692 -5.5,3.409C-4.934,6.207 -6.919,9.581 -7.703,12.245C-8.567,15.183 -9.654,18.04 -10.584,20.956C-11.506,23.845 -12.116,26.778 -12.816,29.722C-13.493,32.572 -14.939,35.578 -15.004,38.524C-15.184,46.637 -3.795,48.799 1.728,45.161C11.198,38.921 17.222,25.957 21.826,16.033C27.316,4.199 33.577,-7.833 37.17,-20.377C38.41,-24.702 41.153,-29.906 39.463,-34.492C38.365,-37.474 34.785,-40.06 31.673,-40.536C24.35,-41.655 18.263,-29.234 16.373,-23.942C13.541,-16.014 11.263,-3.111 18.96,2.66C22.311,5.171 26.176,6.378 30.243,7.098C32.463,7.491 35.007,8.185 37.271,8.123C37.58,8.157 37.89,8.189 38.199,8.221C39.63,8.505 39.556,8.271 37.978,7.52C38.027,9.268 38.245,10.956 38.178,12.737C37.932,19.248 35.898,25.503 35.472,32.021C35.159,36.804 34.47,40.892 38.853,43.884C42.217,46.182 46.229,46.896 50.195,45.869C53.186,45.095 55.753,42.963 58.31,41.316C60.487,39.914 65.452,35.673 68.147,35.544C66.754,34.948 65.361,34.352 63.968,33.755C62.783,33.006 64.875,35.417 65.2,35.757C66.068,36.665 67.259,37.454 68.346,38.072C70.613,39.363 73.339,40.182 75.889,39.301C82.788,36.919 86.661,26.754 88.484,20.458C90.408,13.815 88.279,8.109 82.818,3.9C79.174,1.092 72.615,-2.459 68.542,1.434C63.355,6.39 67.226,11.863 72.152,14.651C79.058,18.557 86.519,17.589 94.148,17.589C103.559,17.589 112.969,17.579 122.379,17.63C130.41,17.675 138.48,15.648 146.544,16.569C144.687,15.598 142.83,14.627 140.973,13.657C140.813,13.83 140.654,14.002 140.494,14.175C139.305,14.824 145.179,19.448 146.905,18.506C147.198,18.347 147.49,18.188 147.783,18.028C148.046,17.951 148.144,17.779 148.076,17.512C147.536,10.049 131.906,11.911 127.749,12.211C122.108,12.619 116.698,13.193 111.004,13.195C104.744,13.196 98.483,13.194 92.223,13.194C89.279,13.194 86.333,13.157 83.39,13.23C81.083,13.288 75.947,14.31 73.952,12.873C70.69,10.524 76.768,-0.205 80.836,6.441C84.178,11.898 81.068,18.08 78.811,23.29C77.108,27.22 72.603,36.687 66.83,35.019C68.263,35.767 69.695,36.516 71.128,37.265C70.16,36.544 69.665,35.133 68.75,34.282C67.726,33.329 66.316,32.46 65.032,31.886C61.324,30.23 59.39,32.329 56.294,34.265C52.436,36.679 48.242,40.343 43.785,41.538C42.994,41.749 42.163,41.659 41.395,41.863C36.528,43.155 43.361,42.144 42.387,42.981C42.818,42.61 42.418,36.017 42.489,35.165C42.902,30.174 44.36,25.417 44.93,20.482C45.299,17.288 46.073,12.453 44.375,9.553C41.108,3.979 33.36,4.005 27.851,3.186C24.682,2.714 22.357,2.665 21.358,-0.674C20.814,-2.49 20.992,-4.642 21.039,-6.505C21.183,-12.217 22.156,-17.746 24.534,-22.972C26.126,-26.472 28.262,-29.691 30.903,-32.487C31.847,-33.486 34.066,-34.716 34.723,-35.732C34.851,-35.79 34.979,-35.848 35.108,-35.906C36.543,-36.429 35.663,-37.058 32.466,-37.793C32.606,-37.934 32.558,-31.976 32.637,-32.4C30.834,-22.64 26.104,-13.631 22.474,-4.502C18.563,5.335 13.925,15.494 8.405,24.534C5.552,29.207 2.429,34.004 -1.413,37.933C-2.142,38.678 -2.917,39.446 -3.739,40.098C-4.477,40.683 -7.005,41.605 -7.767,42.384C-9.753,44.414 -8.327,41.573 -7.999,43.182C-8.345,41.483 -7.497,39.537 -7.023,37.918C-5.327,32.132 -4.091,26.305 -2.145,20.579C-1.253,17.955 -0.634,15.234 0.332,12.645C1.102,10.581 1.949,8.942 1.498,6.709C1.089,4.682 -2.955,3.138 -4.724,2.862C-4.965,2.824 -5.206,2.787 -5.446,2.748C-7.24,2.467 -5.284,4.469 -4.954,4.785C-3.695,5.985 -1.713,6.875 0,7.144" style="fill:white;fill-rule:nonzero;" />
                        </g>
                    </g>
                    <g transform="matrix(4.16667,0,0,4.16667,0,0)">
                        <g transform="matrix(1,0,0,1,553.513,464.209)">
                            <path d="M-93.376,-73.682C-77.594,-90.546 -59.567,-106.434 -38.787,-116.819C-28.765,-121.827 -17.929,-125.682 -7.144,-128.677C6.015,-132.333 20.562,-134.829 33.679,-129.743C54.704,-121.591 59.948,-98.673 60.213,-78.34C60.531,-53.84 54.186,-30.346 47.012,-7.126C38.735,19.658 29.326,46.266 17.524,71.718C11.765,84.14 5.329,96.222 -0.649,108.535C-1.926,111.163 -3.066,113.854 -4.386,116.461C-5.142,117.954 -8.111,124.196 -9.489,124.233C-7.271,124.461 -5.054,124.69 -2.835,124.918C-4.754,124.195 -0.99,111.879 -0.492,110.261C1.155,104.91 3.145,99.674 4.783,94.319C7.931,84.032 11.073,73.744 14.552,63.564C21.55,43.082 30.171,23.25 40.379,4.161C50.354,-14.49 61.979,-32.229 76.299,-47.85C82.903,-55.053 89.842,-63.033 99.016,-66.95C99.621,-67.209 100.587,-67.404 101.104,-67.734C100.007,-67.033 98.91,-69.71 100.225,-67.692C101.537,-65.677 102.515,-64.592 102.949,-62.112C103.772,-57.408 103.047,-52.156 102.389,-47.467C100.735,-35.671 98.048,-23.55 94.733,-12.112C93.065,-6.355 90.994,-0.725 89.726,5.144C88.82,9.331 87.489,14.777 88.756,18.991C88.967,19.693 92.318,19.722 92.712,19.753C97.117,20.107 100.239,19.533 103.39,16.257C107.075,12.425 109.537,7.502 112.393,3.061C121.812,-11.592 129.927,-27.008 138.569,-42.117C147.232,-57.26 155.998,-72.411 165.67,-86.938C170.458,-94.13 175.518,-101.139 180.868,-107.922C185.691,-114.037 190.58,-121.092 197.496,-124.967C194.932,-125.149 192.366,-125.332 189.802,-125.514C193.953,-122.503 188.292,-110.039 187.175,-106.305C184.054,-95.866 180.396,-85.591 176.823,-75.3C169.436,-54.013 161.959,-32.756 155.093,-11.294C148.245,10.109 141.812,31.751 136.267,53.532C133.441,64.628 131.319,75.794 130.347,87.215C129.612,95.834 128.221,104.92 129.177,113.565C129.66,117.929 130.047,125.522 133.575,128.673C136.485,131.273 143.288,131.078 145.89,128.219C145.225,128.95 139.327,126.093 137.91,127.651C137.667,127.918 136.516,128.693 136.368,129.014C138.287,129.214 140.206,129.414 142.125,129.616C141.982,129.524 141.839,129.432 141.696,129.34C141.4,128.534 140.394,127.652 139.991,126.785C138.992,124.634 138.479,122.213 138.026,119.898C136.903,114.153 136.892,108.594 137.173,102.744C138.173,81.944 141.914,62.031 147.485,42.001C158.539,2.269 171.606,-36.692 185.119,-75.642C188.899,-86.538 192.773,-97.42 195.968,-108.507C197.119,-112.506 201.796,-122.114 197.515,-125.22C196.28,-126.115 191.15,-126.513 189.819,-125.768C184.22,-122.631 180.308,-117.627 176.294,-112.731C171.272,-106.604 166.499,-100.268 161.962,-93.775C152.51,-80.25 144.147,-66.007 135.849,-51.759C127.554,-37.516 119.792,-22.965 111.379,-8.792C108.02,-3.131 104.438,2.39 100.983,7.991C99.733,10.02 98.446,12.041 96.952,13.902C96.229,14.802 95.472,15.708 94.612,16.487C93.56,17.44 90.158,18.588 92.779,18.798C94.099,19.052 95.417,19.306 96.735,19.56C95.538,15.575 96.721,10.507 97.534,6.541C98.8,0.376 100.965,-5.513 102.713,-11.544C105.877,-22.46 108.314,-33.926 110.104,-45.149C111.117,-51.51 114.138,-65.639 105.795,-68.436C99.614,-70.507 92.945,-68.942 87.516,-65.793C78.555,-60.595 71.384,-52.024 64.646,-44.314C56.861,-35.408 49.928,-25.823 43.632,-15.815C31.199,3.949 20.753,25.24 12.354,47.017C7.359,59.969 3.105,73.193 -0.972,86.457C-4.721,98.653 -10.838,111.448 -11.048,124.349C-11.003,124.395 -10.958,124.441 -10.914,124.486C-8.733,125.308 -5.167,125.912 -2.871,125.246C-0.254,124.489 1.18,121.504 2.413,119.282C7.086,110.864 10.966,101.875 15.285,93.271C28.101,67.741 39.013,41.544 48.188,14.487C57.188,-12.056 66.716,-39.763 68.03,-67.981C69.076,-90.417 66.313,-118.837 42.721,-128.907C22.562,-137.511 -1.704,-133.895 -21.821,-127.362C-34.619,-123.204 -47.008,-118.076 -58.398,-110.853C-68.756,-104.285 -78.295,-96.497 -87.297,-88.188" style="fill:white;fill-rule:nonzero;" />
                        </g>
                    </g>
                    <g transform="matrix(4.16667,0,0,4.16667,0,0)">
                        <g transform="matrix(1,0,0,1,755.387,481.416)">
                            <path d="M0,-8.528C0.633,-13.051 2.817,-18.088 -0.274,-22.124C-2.172,-24.601 -5.855,-27.106 -8.961,-25.564C-12.745,-23.684 -15.852,-17.732 -17.771,-14.363C-21.145,-8.446 -23.255,-1.405 -24.868,5.196C-26.803,13.106 -27.871,26.897 -15.809,26.174C-10.204,25.838 -6.429,18.901 -3.871,14.669C-0.091,8.411 2.765,1.647 6.416,-4.685C4.229,-6.132 2.044,-7.579 -0.143,-9.026C0.869,-3.341 -2.191,3.261 2.029,8.104C3.562,9.862 6.375,11.996 8.831,11.992C12.124,11.985 13.852,8.52 15.183,5.969C17.297,1.915 19.437,-2.133 21.475,-6.22C22.399,-8.074 23.344,-9.854 24.646,-11.474C25.291,-12.274 25.978,-13.114 26.767,-13.774C27.196,-14.133 29.26,-15.104 29.358,-15.419C28.03,-16.427 27.513,-16.424 27.804,-15.408C27.861,-15.021 27.892,-14.632 27.895,-14.241C27.697,-13.49 27.898,-12.099 27.883,-11.343C27.836,-9.073 27.802,-6.807 27.801,-4.536C27.8,-1.087 29.258,6.192 26.89,9.034C29.075,10.482 31.262,11.928 33.447,13.375C33.833,8.372 36.242,3.344 37.732,-1.442C38.925,-5.27 40.193,-8.928 42.332,-12.343C45.823,-17.919 48.762,-25.367 55.504,-27.593C56.434,-27.957 57.401,-28.134 58.407,-28.127C56.531,-29.374 56.184,-29.002 57.364,-27.01C57.379,-25.754 57.779,-24.443 57.829,-23.16C57.97,-19.591 57.412,-16.011 56.795,-12.507C55.647,-5.994 53.075,2.745 54.765,9.353C55.627,12.728 59.634,15.881 63.137,15.798C69.231,15.653 71.688,9.811 73.936,5.287C76.363,0.404 79.253,-4.008 81.258,-9.115C81.854,-10.632 85.177,-20.625 87.235,-20.439C85.49,-21.599 83.745,-22.76 82,-23.921C83.118,-22.052 82.482,-18.18 82.38,-16.149C82.183,-12.23 81.738,-8.326 81.344,-4.424C80.848,0.484 78.895,8.243 81.496,12.852C82.497,14.625 85.304,17.264 87.489,17.243C91.118,17.205 93.017,9.96 94.265,7.168C96.703,1.714 98.422,-4.006 101.146,-9.341C102.763,-12.512 107.523,-21.507 111.966,-20.996C110.105,-22.352 108.244,-23.709 106.384,-25.065C110.375,-13.956 95.773,7.582 111.026,13.775C116.909,16.164 121.78,10.199 124.952,6.088C127.612,2.643 129.833,-1.116 132.282,-4.709C133.265,-6.149 135.961,-11.284 137.987,-11.104L133.977,-13.269C132.401,-14.59 133.311,-13.666 133.406,-12.074C133.46,-11.184 133.406,-10.285 133.371,-9.396C133.316,-8.034 133.17,-6.678 133.159,-5.315C133.134,-2.089 133.408,1.353 134.54,4.4C136.255,9.015 143.034,15.574 148.298,12.464C151.181,10.761 153.478,7.02 155.032,4.128C156.302,1.77 157.067,-0.713 158.794,-2.807C160.382,-4.733 162.004,-6.411 163.409,-8.488C164.009,-9.373 164.561,-10.363 165.355,-11.099C167.638,-11.823 167.789,-12.573 165.811,-13.347C164.526,-14.772 164.122,-14.758 164.597,-13.305C164.127,-11.466 164.874,-8.481 164.88,-6.586C164.9,-0.587 163.821,5.939 164.904,11.844C165.262,13.789 168.632,16.404 170.625,16.409C174.366,16.416 176.42,10.035 177.644,7.331C179.967,2.197 182.187,-2.673 185.562,-7.257C189.282,-12.308 193.748,-17.248 199.348,-20.252C200.613,-20.931 202.117,-21.723 203.573,-21.867C201.815,-21.693 202.63,-22.426 202.269,-20.174C201.773,-17.1 200.102,-14.3 198.875,-11.485C195.86,-4.565 192.345,3.08 190.846,10.511C190.065,14.381 193.551,19.191 197.777,19.332C199.932,19.405 201.701,17.463 203.118,16.12C206.11,13.285 208.714,10.075 211.386,6.945C214.082,3.788 216.79,0.6 219.626,-2.431C221.215,-4.129 224.361,-7.916 226.901,-7.64C225.842,-8.14 224.781,-8.64 223.722,-9.141C221.435,-10.809 222.491,-8.651 222.517,-6.985C222.539,-5.562 222.452,-4.138 222.373,-2.718C222.197,0.437 221.863,3.688 222.073,6.841C222.455,12.557 226.801,17.663 232.422,19.116C239.272,20.884 246.168,14.006 250.118,9.243C252.955,5.824 255.154,1.936 257.57,-1.777C259.777,-5.169 262.597,-8.166 264.242,-11.869C266.562,-17.085 266.679,-22.463 260.086,-24.407C256.059,-25.594 251.971,-22.034 249.144,-19.539C243.902,-14.913 246.668,-10.243 252.481,-7.77C259.944,-4.595 269.242,-5.861 277.11,-5.792C301.181,-5.579 324.979,-8.622 349.008,-9.064C351.578,-9.111 346.161,-14.257 344.219,-14.22C324.345,-13.854 304.596,-11.118 284.719,-10.897C275.35,-10.793 265.393,-10.128 256.085,-11.175C255.896,-11.196 251.545,-11.561 251.284,-11.898C252.298,-10.587 254.101,-13.424 254.745,-14.063C256.458,-15.763 258.566,-17.402 260.698,-18.512C261.055,-18.699 262.202,-18.973 262.344,-19.256C262.476,-19.302 262.608,-19.348 262.741,-19.395C261.645,-20.359 260.549,-21.322 259.453,-22.286C259.421,-22.274 258.06,-17.215 257.777,-16.581C256.132,-12.88 253.315,-9.877 251.105,-6.49C246.539,0.51 242.294,7.722 235.01,12.268C233.94,12.936 231.591,14.598 230.255,14.243C228.401,13.75 228.717,11.17 228.699,9.503C228.67,6.758 228.872,3.993 229.024,1.252C229.282,-3.368 229.732,-7.954 225.687,-11.007C220.726,-14.754 216.743,-10.991 213.161,-7.143C209.526,-3.239 206.107,0.882 202.634,4.929C201.448,6.311 195.121,14.872 192.994,14.082C194.519,15.193 196.042,16.303 197.565,17.413C196.161,15.395 199.092,9.331 199.863,7.082C200.874,4.139 202.093,1.271 203.261,-1.611C204.934,-5.739 207.154,-9.859 208.408,-14.13C210.315,-20.63 205.076,-28.166 197.757,-26.983C189.173,-25.597 181.59,-15.91 177.213,-9.274C174.918,-5.794 173.278,-2.123 171.604,1.663C170.894,3.272 168.063,11.256 165.836,11.252C167.742,12.773 169.649,14.294 171.557,15.816C170.198,8.411 171.849,0.342 171.408,-7.187C171.146,-11.676 169.592,-15.386 165.118,-17.205C159.503,-19.487 156.982,-12.616 153.971,-9.27C150.046,-4.91 148.445,0.733 144.566,5.182C143.581,6.312 142.493,6.958 141.431,7.929C140.856,8.454 139.865,7.424 140.771,8.17C141.83,9.043 140.743,6.898 140.707,6.65C140.362,4.243 139.86,1.956 139.823,-0.507C139.768,-4.207 141.072,-8.8 139.022,-12.136C137.088,-15.286 133.009,-17.619 129.985,-14.876C125.384,-10.7 122.659,-4.208 118.97,0.728C117.844,2.236 116.658,3.705 115.35,5.06C114.18,6.271 111.501,7.501 110.617,8.728C110.451,8.784 110.284,8.838 110.117,8.894C109.136,9.07 109.401,9.436 110.917,9.993C111.119,9.743 110.81,7.889 110.809,7.514C110.804,5.873 110.921,4.21 111.046,2.576C111.692,-5.87 115.784,-13.662 112.759,-22.084C112.084,-23.962 109.096,-25.931 107.176,-26.152C100.51,-26.921 95.494,-15.923 93.285,-11.131C91.351,-6.933 90.019,-2.507 88.144,1.713C86.544,5.315 85.197,9.703 82.194,12.383C82.694,12.359 83.195,12.335 83.696,12.311C90.271,13.881 87.148,16.931 87.254,13.729C87.288,12.684 87.143,11.604 87.155,10.55C87.19,7.745 87.469,4.939 87.736,2.149C88.277,-3.486 89.09,-9.15 89.12,-14.819C89.144,-19.132 88.427,-23.289 83.888,-25.136C79.476,-26.932 77.643,-20.61 76.293,-17.488C75.375,-15.366 74.571,-13.202 73.733,-11.049C72.265,-7.279 70.011,-4.131 68.095,-0.605C66.34,2.622 65.633,6.263 62.534,8.54C62.394,8.643 58.12,10.623 58.124,10.615C58.649,10.87 59.175,11.126 59.701,11.382C61.293,12.737 61.81,12.401 61.253,10.375C61.679,9.191 61.317,7.256 61.395,6.005C62.068,-4.863 71.119,-28.199 55.31,-32.915C46.891,-35.425 42.036,-26.583 38.421,-20.887C35.341,-16.037 32.982,-11.678 31.268,-6.154C29.688,-1.069 27.207,4.061 26.796,9.405C26.674,10.993 32.084,15.272 33.354,13.746C35.584,11.07 34.47,6.507 34.459,3.294C34.443,-1.354 34.951,-6.229 34.521,-10.861C34.032,-16.114 28.078,-22.85 22.394,-20.006C18.898,-18.257 16.663,-14.275 15.01,-10.932C12.909,-6.686 10.714,-2.433 8.464,1.742C7.629,3.288 6.392,4.542 5.521,6.004C3.72,6.507 3.721,7.109 5.525,7.81C6.749,9.16 7.143,9.283 6.706,8.176C6.901,7.686 6.392,6.111 6.371,5.435C6.262,1.947 7.126,-1.591 6.509,-5.055C6.282,-6.329 1.021,-11.252 -0.049,-9.397C-2.922,-4.417 -14.558,25.01 -22.862,20.777L-19.068,23.8C-21.068,20.443 -19.079,12.786 -18.232,9.348C-16.726,3.227 -14.75,-3.349 -11.733,-8.904C-9.808,-12.451 -7.38,-16.639 -4.34,-19.416C-3.951,-19.851 -3.498,-20.2 -2.98,-20.464C-1.436,-21.173 -2.211,-21.749 -5.306,-22.19C-5.583,-21.959 -5.422,-19.439 -5.475,-19.019C-5.747,-16.826 -6.346,-14.687 -6.651,-12.499C-6.933,-10.489 -0.265,-6.636 0,-8.528" style="fill:white;fill-rule:nonzero;" />
                        </g>
                    </g>
                    <g transform="matrix(4.16667,0,0,4.16667,0,0)">
                        <g transform="matrix(1,0,0,1,385.611,423.553)">
                            <path d="M0,-5.391C-0.432,-5.312 -0.292,-5.302 0.417,-5.362C0.71,-5.353 0.988,-5.287 1.249,-5.163C1.484,-5.094 1.689,-4.971 1.865,-4.793C1.757,-4.881 1.661,-4.979 1.575,-5.087C0.559,-6.235 -1.777,-6.256 -3.085,-5.74C-4.318,-5.253 -5.875,-4.117 -5.592,-2.578C-5.579,-2.509 -5.579,-2.206 -5.539,-2.164C-5.54,-2.29 -5.542,-2.417 -5.543,-2.543C-5.616,-2.291 -5.607,-2.29 -5.518,-2.542C-5.346,-3.039 -5.778,-2.293 -5.403,-2.736C-5.233,-2.932 -5.209,-2.966 -5.333,-2.838C-5.528,-2.651 -5.416,-2.726 -4.993,-3.066C-2.899,-2.281 -0.805,-1.495 1.289,-0.709C1.368,-2.184 1.372,-3.655 1.372,-5.13C1.373,-5.897 0.514,-6.654 -0.08,-6.968C-0.908,-7.407 -2.086,-7.555 -3,-7.391C-4.838,-7.063 -6.543,-5.991 -6.544,-3.976C-6.544,-3.414 -6.541,-2.853 -6.543,-2.292C-6.544,-2.012 -6.551,-1.732 -6.553,-1.451C-6.556,-0.813 -6.527,-1.803 -6.564,-1.105C-6.593,-0.573 -6.611,-0.082 -6.344,0.404C-5.999,1.034 -5.359,1.426 -4.71,1.671C-3.406,2.164 -1.446,2.125 -0.282,1.252C1.326,0.046 2.723,-1.569 2.324,-3.734C-0.065,-2.898 -2.454,-2.061 -4.843,-1.225C-3.507,0.282 -1.057,0.692 0.828,0.285C1.806,0.074 2.771,-0.233 3.506,-0.954C4.031,-1.471 4.536,-2.352 4.372,-3.13C3.986,-4.967 1.674,-5.753 0,-5.391" style="fill:white;fill-rule:nonzero;" />
                        </g>
                    </g>
                    <g transform="matrix(4.16667,0,0,4.16667,0,0)">
                        <g transform="matrix(1,0,0,1,891.107,427.991)">
                            <path d="M0,-4.003C-0.22,-3.976 -0.438,-3.947 -0.657,-3.92C0.97,-2.139 2.596,-0.357 4.222,1.423C5.65,-0.024 5.801,-1.916 5.439,-3.824C5.105,-5.587 3.011,-6.762 1.411,-6.998C0.07,-7.196 -2.134,-6.729 -2.11,-4.944C-2.102,-4.311 -2.066,-3.678 -2.069,-3.044C-2.071,-2.758 -2.08,-2.473 -2.106,-2.188C-2.117,-2.072 -2.299,-1.183 -2.165,-1.647L1.658,-2.883C0.846,-3.061 1.243,-2.671 2.85,-1.715C3.842,-1.435 4.325,-0.891 4.3,-0.084C4.293,-0.082 4.394,-0.674 4.399,-0.695C1.857,-1.33 -0.685,-1.966 -3.228,-2.601C-3.239,-2.376 -3.24,-2.159 -3.231,-1.935C-3.151,-0.002 -1.47,1.559 0.381,1.952C1.743,2.241 4.479,1.996 4.396,-0.029C4.386,-0.254 4.388,-0.471 4.399,-0.695C4.501,-2.608 2.509,-4.217 0.787,-4.582C-0.082,-4.767 -1.122,-4.861 -1.932,-4.414C-2.705,-3.987 -3.016,-3.453 -3.228,-2.601C-3.899,0.106 -1.212,2.561 1.256,2.985C2.052,3.122 2.781,3.193 3.569,2.944C4.125,2.769 4.899,2.369 5.078,1.749C5.553,0.102 5.539,-1.35 5.517,-3.038C3,-3.411 0.483,-3.785 -2.033,-4.158C-2.008,-4.041 -1.987,-3.924 -1.972,-3.806C-1.939,-3.585 -1.947,-3.648 -1.993,-3.993C-2.018,-3.816 -2.035,-3.571 -2.021,-3.398C-1.984,-2.99 -1.884,-4.038 -2.032,-3.356C-2.066,-3.286 -2.101,-3.218 -2.134,-3.149C-1.894,-3.446 -1.889,-3.471 -2.121,-3.221C-3.167,-2.16 -2.766,-0.514 -1.819,0.468C-0.631,1.701 1.053,2.339 2.758,2.123C2.977,2.095 3.195,2.067 3.414,2.039C5.192,1.813 6.031,-0.103 5.121,-1.602C4.066,-3.341 1.992,-4.256 0,-4.003" style="fill:white;fill-rule:nonzero;" />
                        </g>
                    </g>
                    <g transform="matrix(4.16667,0,0,4.16667,0,0)">
                        <g transform="matrix(0.83433,0,0,0.83433,-1944.98,-1425.83)">
                            <text x="3204.11px" y="2379.95px" style="font-family:'HelveticaNeue-Medium', 'Helvetica Neue', sans-serif;font-weight:500;font-size:43.148px;fill:white;">P<tspan x="3241.52px 3281.3px 3322.72px 3356.94px 3398.36px 3439.74px 3478.75px 3516.16px 3553.57px 3593.35px " y="2379.95px 2379.95px 2379.95px 2379.95px 2379.95px 2379.95px 2379.95px 2379.95px 2379.95px 2379.95px ">HOTOGRAPHY</tspan></text>
                        </g>
                    </g>
                </g>
            </svg>
        @endif
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>

    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(array(
    'theme_location' => 'primary_navigation',
    'depth' => 2,
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'navbarResponsive',
    'menu_class' => 'nav navbar-nav float-md-right',
    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker(),
    )) !!}
    @endif

</nav>
