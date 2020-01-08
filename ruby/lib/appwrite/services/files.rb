module Appwrite
    class Files < Service

        def upload(x:, y:, z:, file:)
            path = '/mock/tests/files'

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