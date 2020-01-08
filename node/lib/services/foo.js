const Service = require('../service.js');

class Foo extends Service {

    /**
     * Mock a get request for SDK tests
     *
     * @param string x
     * @param number y
     * @param array z
     * @throws Exception
     * @return {}
     */
    async get(x, y, z) {
        let path = '/mock/tests/foo';
        
        return await this.client.call('get', path, {
                    'content-type': 'application/json',
               },
               {
                'x': x,
                'y': y,
                'z': z
            });
    }

    /**
     * Mock a post request for SDK tests
     *
     * @param string x
     * @param number y
     * @param array z
     * @throws Exception
     * @return {}
     */
    async post(x, y, z) {
        let path = '/mock/tests/foo';
        
        return await this.client.call('post', path, {
                    'content-type': 'application/json',
               },
               {
                'x': x,
                'y': y,
                'z': z
            });
    }

    /**
     * Mock a put request for SDK tests
     *
     * @param string x
     * @param number y
     * @param array z
     * @throws Exception
     * @return {}
     */
    async put(x, y, z) {
        let path = '/mock/tests/foo';
        
        return await this.client.call('put', path, {
                    'content-type': 'application/json',
               },
               {
                'x': x,
                'y': y,
                'z': z
            });
    }

    /**
     * Mock a patch request for SDK tests
     *
     * @param string x
     * @param number y
     * @param array z
     * @throws Exception
     * @return {}
     */
    async patch(x, y, z) {
        let path = '/mock/tests/foo';
        
        return await this.client.call('patch', path, {
                    'content-type': 'application/json',
               },
               {
                'x': x,
                'y': y,
                'z': z
            });
    }

    /**
     * Mock a delete request for SDK tests
     *
     * @param string x
     * @param number y
     * @param array z
     * @throws Exception
     * @return {}
     */
    async delete(x, y, z) {
        let path = '/mock/tests/foo';
        
        return await this.client.call('delete', path, {
                    'content-type': 'application/json',
               },
               {
                'x': x,
                'y': y,
                'z': z
            });
    }
}

module.exports = Foo;