const Service = require('../service.js');

class Files extends Service {

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
        let path = '/mock/tests/files';
        
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

module.exports = Files;