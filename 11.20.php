    class Solution{
      public:
          int Numberf1(int n){
             int count =0;
             while(n){
               count ++;
               n = n & (n-1);
             }
           return count;
          }
    }