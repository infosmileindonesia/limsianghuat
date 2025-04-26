import axios from 'axios';
window.axios = axios;

import { createPopper  } from '@popperjs/core';

window.createPopper  = createPopper;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
