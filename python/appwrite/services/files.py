from ..service import Service


class Files(Service):

    def __init__(self, client):
        super(Files, self).__init__(client)

    def upload(self, x, y, z, file):
        """Mock a post request for SDK tests"""

        params = {}
        path = '/mock/tests/files'
        params['x'] = x
        params['y'] = y
        params['z'] = z
        params['file'] = file

        return self.client.call('post', path, {
            'content-type': 'multipart/form-data',
        }, params)
