class Solution{
    public:
      int FirstNotRepeatingChar(string str){
       int length=str.size();
           if(length==0)
            return -1;
            const int tableSize=256;
            unsigned int hashTable[tableSize];
            for(unsigned int i = 0; i < tableSize;++i)
            hashTable[i]=0;
            char*pHashkey=&str[0];
            while(*(pHashkey) !='\0')
            hashTable[*(pHashkey++)]++;
            pHashkey=&str[0];
            char resultChar=NULL;
            while(*(pHashkey) !='\0'){
               if(hashTable[*pHashkey]==1){
                  resultChar=*pHashkey;
                  break;
                }
             pHashkey++;
            }
           if(resultChar==NULL)
             return ;
            for(int i = 0 ; i < lenght ; ++i){
            if(str[i]==resultChar)
                 return i;
            }
       return -1;
    }
}