from ..service import Service


class Bar(Service):

    def __init__(self, client):
        super(Bar, self).__init__(client)

    def get(self, x, y, z):
        """Mock a get request for SDK tests"""

        params = {}
        path = '/mock/tests/bar'
        params['x'] = x
        params['y'] = y
        params['z'] = z

        return self.client.call('get', path, {
            'content-type': 'application/json',
        }, params)

    def post(self, x, y, z):
        """Mock a post request for SDK tests"""

        params = {}
        path = '/mock/tests/bar'
        params['x'] = x
        params['y'] = y
        params['z'] = z

        return self.client.call('post', path, {
            'content-type': 'application/json',
        }, params)

    def put(self, x, y, z):
        """Mock a put request for SDK tests"""

        params = {}
        path = '/mock/tests/bar'
        params['x'] = x
        params['y'] = y
        params['z'] = z

        return self.client.call('put', path, {
            'content-type': 'application/json',
        }, params)

    def patch(self, x, y, z):
        """Mock a patch request for SDK tests"""

        params = {}
        path = '/mock/tests/bar'
        params['x'] = x
        params['y'] = y
        params['z'] = z

        return self.client.call('patch', path, {
            'content-type': 'application/json',
        }, params)

    def delete(self, x, y, z):
        """Mock a delete request for SDK tests"""

        params = {}
        path = '/mock/tests/bar'
        params['x'] = x
        params['y'] = y
        params['z'] = z

        return self.client.call('delete', path, {
            'content-type': 'application/json',
        }, params)
