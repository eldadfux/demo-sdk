from ..service import Service


class General(Service):

    def __init__(self, client):
        super(General, self).__init__(client)

    def empty(self):
        """Mock a post request for SDK tests"""

        params = {}
        path = '/mock/tests/general/empty'

        return self.client.call('get', path, {
            'content-type': 'application/json',
        }, params)

    def redirect(self):
        """Mock a post request for SDK tests"""

        params = {}
        path = '/mock/tests/general/redirect'

        return self.client.call('get', path, {
            'content-type': 'application/json',
        }, params)

    def redirected(self):
        """Mock a post request for SDK tests"""

        params = {}
        path = '/mock/tests/general/redirected'

        return self.client.call('get', path, {
            'content-type': 'application/json',
        }, params)

    def upload(self, x, y, z, file):
        """Mock a post request for SDK tests"""

        params = {}
        path = '/mock/tests/general/upload'
        params['x'] = x
        params['y'] = y
        params['z'] = z
        params['file'] = file

        return self.client.call('post', path, {
            'content-type': 'multipart/form-data',
        }, params)
