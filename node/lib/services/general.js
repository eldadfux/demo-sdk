const Service = require('../service.js');

class General extends Service {

    /**
     * Mock a post request for SDK tests
     *
     * @throws Exception
     * @return {}
     */
    async empty() {
        let path = '/mock/tests/general/empty';
        
        return await this.client.call('get', path, {
                    'content-type': 'application/json',
               },
               {
            });
    }

    /**
     * Mock a post request for SDK tests
     *
     * @throws Exception
     * @return {}
     */
    async redirect() {
        let path = '/mock/tests/general/redirect';
        
        return await this.client.call('get', path, {
                    'content-type': 'application/json',
               },
               {
            });
    }

    /**
     * Mock a post request for SDK tests
     *
     * @throws Exception
     * @return {}
     */
    async redirected() {
        let path = '/mock/tests/general/redirected';
        
        return await this.client.call('get', path, {
                    'content-type': 'application/json',
               },
               {
            });
    }

    /**
     * Mock a post request for SDK tests
     *
     * @param string x
     * @param number y
     * @param array z
     * @param File file
     * @throws Exception
     * @return {}
     */
    async upload(x, y, z, file) {
        let path = '/mock/tests/general/upload';
        
        return await this.client.call('post', path, {
                    'content-type': 'multipart/form-data',
               },
               {
                'x': x,
                'y': y,
                'z': z,
                'file': file
            });
    }
}

module.exports = General;