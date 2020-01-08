module Appwrite
    class Foo < Service

        def get(x:, y:, z:)
            path = '/mock/tests/foo'

            params = {
                'x': x, 
                'y': y, 
                'z': z
            }

            return @client.call('get', path, {
                'content-type' => 'application/json',
            }, params);
        end

        def post(x:, y:, z:)
            path = '/mock/tests/foo'

            params = {
                'x': x, 
                'y': y, 
                'z': z
            }

            return @client.call('post', path, {
                'content-type' => 'application/json',
            }, params);
        end

        def put(x:, y:, z:)
            path = '/mock/tests/foo'

            params = {
                'x': x, 
                'y': y, 
                'z': z
            }

            return @client.call('put', path, {
                'content-type' => 'application/json',
            }, params);
        end

        def patch(x:, y:, z:)
            path = '/mock/tests/foo'

            params = {
                'x': x, 
                'y': y, 
                'z': z
            }

            return @client.call('patch', path, {
                'content-type' => 'application/json',
            }, params);
        end

        def delete(x:, y:, z:)
            path = '/mock/tests/foo'

            params = {
                'x': x, 
                'y': y, 
                'z': z
            }

            return @client.call('delete', path, {
                'content-type' => 'application/json',
            }, params);
        end


        protected

        private
    end 
end