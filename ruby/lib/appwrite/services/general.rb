module Appwrite
    class General < Service

        def empty()
            path = '/mock/tests/general/empty'

            params = {
            }

            return @client.call('get', path, {
                'content-type' => 'application/json',
            }, params);
        end

        def redirect()
            path = '/mock/tests/general/redirect'

            params = {
            }

            return @client.call('get', path, {
                'content-type' => 'application/json',
            }, params);
        end

        def redirected()
            path = '/mock/tests/general/redirected'

            params = {
            }

            return @client.call('get', path, {
                'content-type' => 'application/json',
            }, params);
        end

        def upload(x:, y:, z:, file:)
            path = '/mock/tests/general/upload'

            params = {
                'x': x, 
                'y': y, 
                'z': z, 
                'file': file
            }

            return @client.call('post', path, {
                'content-type' => 'multipart/form-data',
            }, params);
        end


        protected

        private
    end 
end